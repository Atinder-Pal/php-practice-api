<form action="">
    <label for="user-text">Enter your text:
        <textarea name="userText" id="user-text" cols="30" rows="10"></textarea> 
    </label>
    <label for="user-profanity-list">Enter your profanity words:
        <input type="text" name="userProfanityList" id="user-profanity-list">
    </label>
    <label for="user-profanity-replacer">Enter replacement word(s)/character(s) for profanity:
        <input type="text" name="userProfanityReplacer" id="user-profanity-replacer">
    </label>
    <label for="">
        <select name="operation" id="operation">
            <option value="check">Check For Profanity</option>
            <option value="remove">Remove Profanity</option>
        </select>
    </label>
    <input type="submit" value="Submit!">
</form>

