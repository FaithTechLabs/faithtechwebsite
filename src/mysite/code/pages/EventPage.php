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
        $conn = $fetch->request();

        print_r(json_decode($conn->getBody()));

        // parse the XML body
        $msgs = $fetch->getValues($conn->getBody(), "results");

        // generate an object our templates can read
        $output = new ArrayList();

        if ($msgs) {
            foreach ($msgs as $msg) {
                $output->push(new ArrayData(array(
                    'Description' => Convert::xml2raw($msg->channel_item_description)
                )));
            }
        }

        return $output;
    }
}
