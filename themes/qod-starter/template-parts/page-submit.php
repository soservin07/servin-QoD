<?php

/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */



?>

<section class="entry-content">
    <h2 class="entry-title">Submit a Quote</h2>
    <form action="post" name="quote-submit" class="quote-submit">
        <label>
            Author of Quote
            <br>
            <input type="text" value="" name="txt-author" class="txt-author" aria-required="true" aria-invalid="false" required="true">
        </label>

        <label>
            Your Quote
            <br>
            <textarea name="txt-quote" value="" class="txt-quote" aria-required="true" aria-invalid="false" required="true"></textarea>
        </label>
        <label>
            Where did you find this quote? <span>(e.g. book name)</span>
            <br>
            <input type="text" value="" name="txt-where" class="txt-where" aria-required="true" aria-invalid="false">
        </label>
        <label>
            Provide the URL of the quote source, if available
            <br>
            <input type="text" value="" name="txt-url" class="txt-url" aria-required="true" aria-invalid="false" placeholder="ex: www.google.com">
        </label>
        <button type="button" value="Submit Quote" class="btn-submit">Submit Quote</button>

    </form>
    <p class="txt-response">Thanks for the quote, submission was received!</p>
</section>

<section class="login-required">
    <h2 class="entry-title">Submit a Quote</h2>
    <p class="sorry">Sorry, you must be logged in to submit a quote!</p>

    <a href="<?= admin_url() ?>" class="login-auth">Click here to login.</a>
</section>
<?php
echo qod_get_quote_meta_fields(204, 'rendered', true);
?>