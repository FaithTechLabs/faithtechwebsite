<section class="content-section align-c content-section-9">
    <div class="container">
        <h2 class="hd-2">$Title</h2>
        <h3 class="hd-3">$Company</h3>
        <h4 class="hd-4">$Location</h4>
        <hr class="mr-b-40">
        <div class="row eqh gt40 fs-equalize-element">
            <div class="flex-col-md-8 flex-col-md-offset-2 align-j">
                <div class="content main-text">
                    <h4 class="hd-4">Required Skills</h4>
                    $Requirements
                    <hr class="mr-b-10">
                    <h4 class="hd-4">Job Description</h4>
                    $Description
                    <hr class="mr-b-10">
                    <h4 class="hd-4">Deadline To Apply</h4>
                    <p>$Date.Long</p>
                    <hr class="mr-b-10">
                    <h4 class="hd-4">Application</h4>
                    <p>
                        Please submit Cover Letter and Resume to
                        <% if $Contact %>
                            <a href="mailto:{$Contact}?subject={$Title}%20-%20{$Company}">$Contact</a>
                        <% else %>
                            <a href="mailto:jobs@faithtech.com?subject={$Title}%20-%20{$Company}">jobs@faithtech.com</a>
                        <% end_if %>
                        with <b>$Title - $Company</b> in the subject line
                    </p>
                </div>
            </div>
        </div>
    </div>
</section><!-- /.content-section -->