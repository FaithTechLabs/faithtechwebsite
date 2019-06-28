<!-- Join the Movement section -->
<section id="movement" class="form-section form-section-1">
    <div class="container align-c">

        <h2 class="title medium mr-b-10">Join the Movement</h2>

        <p class="title-sub medium">Sign up to be notified of upcoming events, opportunities within the community,
            and for new developments with FaithTech!</p>
        <% with $ContactForm %>
        <form action="form-data/notify-me.php" class="form-widget" data-formtype="newsletter" data-msgpos="append"
              novalidate="novalidate">

            <ul class="form-inline-tbl align-t">
                <li><input class="form-control" data-label="Name" required="" data-msg="Please enter name."
                           type="text" name="name" placeholder="Enter your name" aria-required="true"></li>
                <li><input class="form-control" data-label="Email" required="" data-msg="Please enter email."
                           type="email" name="email" placeholder="Enter your email" aria-required="true"></li>
                <li><select class="form-control" data-label="Location" required="" data-msg="Please enter location."
                            type="text" name="location" placeholder="Enter your location" aria-required="true">
                    <option class="" value="Chicago">Chicago</option>
                    <option value="Silicon Valley">Silicon Valley</option>
                    <option value="Toronto">Toronto</option>
                    <option value="Vancouver">Vancouver</option>
                    <option value="Waterloo">Waterloo</option>
                    <option value="Other">Other</option>
                </select>
                </li>
                <li>
                    $Fields.dataFieldByName(Captcha)
                </li>
                <li>
                    <button type="submit" id="submit" data-loading-text="Please wait.." class="btn btn-primary"><i
                            class="fa fa-envelope-o"></i> Subscribe now
                    </button>
                </li>

            </ul>
        </form>
        <% end_with %>
        <!-- /form -->

    </div>
</section><!-- /Join the Movement section --><!-- Content -->