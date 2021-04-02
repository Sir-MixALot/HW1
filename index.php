<?php
$text = 
'What is Symfony. Symfony is a set of PHP Components, a Web Application framework, a Philosophy, and a Community - all working together in harmony. 
Symfony Framework. The leading PHP framework to create websites and web applications. Built on top of the Symfony Components. 
Symfony Components. A set of decoupled and reusable components on which the best PHP applications are built, such as Drupal, phpBB, and eZ Publish. 
Symfony Community. A passionate group of over 600,000 developers from more than 120 countries, all committed to helping PHP surpass the impossible. 
Symfony Philosophy. Embracing and promoting professionalism, best practices, standardization and interoperability of applications.';
echo str_replace('Symfony','<span style="color:#cc34eb">Symfony</span>', "<p style='font-size:30px'>" . $text . "</p>");
echo "<h1>The number of occurrences of *Symfony* in the text is: " . substr_count($text, 'Symfony', 0) . "</h1>";
$symbols = [".", ",", "\n"];
$p_count = explode("\n", $text);
echo "<h1>The number of all paragraphs in the text is: " . count($p_count) . "</h1>";
$s_count = explode(". ", $text);
echo "<h1>The number of all sentences in the text is: " . count($s_count) . "</h1>";
echo "<h1>The number of all words in the text is: " . str_word_count($text) . "</h1>";
echo "<h1>The number of all symbols in the text is: " . strlen($text) . " (with gaps)</h1>";
$new_text2 = str_replace(" ", '', $text);
echo "<h1>The number of all symbols in the text is: " . strlen($new_text2) . " (without gaps)</h1>";
$new_text3 = str_replace($symbols, '', $text);
$word = explode(" ", $new_text3);
$tmp = array_map(function ($item) { return mb_strlen($item); }, $word);
$maxs = array_filter($word, function($item) use ($tmp) { return mb_strlen($item) == max($tmp); });
foreach($maxs as $value){
    echo "<h1> The longest word is: <span style='color:#cc34eb'>" . $value . "</span></h1>";
}
$all_symbols =[];
foreach (count_chars($text, 1) as $i => $value) {
    $all_symbols[chr($i)] = $value;
}
natcasesort($all_symbols); 
foreach ($all_symbols as $key => $value) {
    echo "<h2>\"" , $key , "\" occurs $value time(s) in a line.</h2>";
}