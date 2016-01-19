<?php
/**
 * @text String 
 * @length int
 */
function createTextPreview($text, $length=25) {
    /*
     * Break the text apart at the spaces and create the preview variable
     */
    $words = explode(' ', $text);
    $preview = NULL;
 
    /*
     * Run a loop to add words to the preview variable
     */
    if($length < count($words)) {
        for($i=0; $i<$length; $i++) {
            $preview .= $words[$i] . ' '; // Add the space back in between words
        }
        $preview .= $words[$length] . '...'; // Ellipsis to indicate preview
    } else {
        /*
         * If the entry isn't as long as the specified preview length, simply
         * return the whole entry.
         */
        $preview = $text;
    }
 
    /*
     * Return the preview
     */
    return $preview;
}


$text = "print only full words when i want to print short description from a long descriptin LOREM lipsum text. Put ... elipsis at the end if tehre are more words.";

echo createTextPreview($text,10);