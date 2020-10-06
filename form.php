<?php require_once dirname(__FILE__).'/requestApiData.php' ?>
<form action="#" method="POST">   
    <label for="user-text">Enter your text:
        <textarea name="userText" id="user-text" required></textarea> 
    </label>
    <label for="user-profanity-list">Enter your profanity words:
        <input type="text" name="userProfanityList" id="user-profanity-list">
    </label>
    <label for="user-profanity-replacer">Enter replacement phrase/character for profanity:
        <input type="text" name="userProfanityReplacer" id="user-profanity-replacer">
    </label>
    <label for="operation">Select operation:
        <select name="operation" id="operation">
            <option value="check">Check For Profanity</option>
            <option value="remove">Remove Profanity</option>
        </select>
    </label>
    <input type="submit" value="Submit!" id="submit">
  </form>

<?php
if ( isset($_POST['userText']) )
{
    
    if ( $_POST['operation'] == "check")
    {
        checkForProfanity();   
    }
    elseif( $_POST['operation'] == "remove" )
    {
        removeProfanity();
    }
}
