<?php 
$sample_text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

/***** Check if the text is less than 15 words so, print the complete text otherwise trim the text to 15 characters and added the dots(...) *****/
if(str_word_count($sample_text) <= 15) {
  print $sample_text;
} else {
  print implode(' ', array_slice($words = explode(' ', $sample_text), 0, 15)).'...';
}

/***** Check if the text is less than 20 words so, print the complete text otherwise trim the text to 20 characters and added the dots(...) *****/
if(str_word_count($sample_text) <= 20) {
  print $sample_text;
} else {
  print implode(' ', array_slice($words = explode(' ', $sample_text), 0, 20)).'...';
}
