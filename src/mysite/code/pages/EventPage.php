<?php

class EventPage extends Page
{
    static $db = array();

    static $allowed_children = array(
        'EventGalleryPage', 'RedirectorPage'
    );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        return $fields;
    }
}

class EventPage_Controller extends Page_Controller
{

    public function getEventGalleryPages()
    {
        return EventGalleryPage::get()->filter('ParentID', $this->ID);
    }

    public function getEventbriteEvents($location = null)
    {
        $fetch = new RestfulService(
            'https://www.eventbriteapi.com/v3/events/search/'
        );

        $queryString = array(
            'organizer.id' => '11613235556',
            'token' => 'WJN73SMN37UUWDZKGUC3'
        );

        if (isset($location)) {
            $queryString['location.address'] = $location;
            $queryString['location.within'] = '20km';
        }


        $fetch->setQueryString($queryString);

        // perform the query

        $fetch = new RestfulService('https://www.eventbriteapi.com/v3/events/search/');

        $headers = array(
            'Accept' => 'application/xml',
            'Content-Type' => 'application/xml'
        );

        $conn = $fetch->curlRequest(
            'https://www.eventbriteapi.com/v3/events/search/?organizer.id=11613235556&token=WJN73SMN37UUWDZKGUC3',
            'GET',
            null,
            $headers
        );

        print_r($conn->getHeaders());

        // parse the XML body
        $msgs = $fetch->getValues($conn->getBody(), "results");

        print_r($msgs);

        // generate an object our templates can read
        $output = new ArrayList();

        if($msgs) {
            foreach($msgs as $msg) {
                $output->push(new ArrayData(array(
                    'Description' => Convert::xml2raw($msg->channel_item_description)
                )));
            }
        }

        return $output;

    }

    /**
     * Convert an array to XML
     * @param array $array
     * @param SimpleXMLElement $xml
     *
     * @return SimpleXMLElement $xml
     */
    private function arrayToXml($array, &$xml){
        foreach ($array as $key => $value) {
            if(is_array($value)){
                if(is_int($key)){
                    $key = "e";
                }
                $label = $xml->addChild($key);
                $this->arrayToXml($value, $label);
            }
            else {
                $xml->addChild($key, $value);
            }
        }
        return $xml;
    }
}
