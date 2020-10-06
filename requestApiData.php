<?php
function checkForProfanity()
{
    // Citation
    // https://stackoverflow.com/questions/11065522/php-warning-file-get-contents-failed-to-open-stream-http-request-failed-http
    // I was getting error: PHP Warning:  file_get_contents(https://www.purgomalum.com/service/containsprofanity?text=this is shit&amp;add=): failed to open stream: HTTP request failed! HTTP/1.0 400 Bad Request
    // Above source suggested to encode user input before embedding it in request url
    $userText= urlencode($_POST['userText']);
    // End Citation

    $profanityApiResponse = file_get_contents("https://www.purgomalum.com/service/containsprofanity?text={$userText}"); 
    //var_dump( $profanityApiResponse );
    if ( $profanityApiResponse )
    {
        $answer = $profanityApiResponse=='true' ? 'contains' : 'does not contain';
        //var_dump( $profanityApiResponse );
        ?>
        <h3>The text you entered <?php echo $answer ?> profanity</h3>
        <?php
    }
 }

function removeProfanity()
{
    $userText= urlencode($_POST['userText']);
    $userProfanityList= urlencode($_POST['userProfanityList']);
    $userProfanityReplacer= urlencode($_POST['userProfanityReplacer']);

    $profanityApiResponse = file_get_contents("https://www.purgomalum.com/service/json?add={$userProfanityList}&fill_text={$userProfanityReplacer}&text={$userText}"); 
    //var_dump( $profanityApiResponse ); 
    if ( $profanityApiResponse )
    {
        $apiResponseInPhp = json_decode( $profanityApiResponse );
    }    
    //var_dump( $apiResponseInPhp );
    ?>
    <h3>Here is the text you entered after filtering profanity: <?php echo $apiResponseInPhp->result ?></h3>
    <?php
}
?>