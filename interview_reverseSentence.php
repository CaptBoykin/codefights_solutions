function reverseSentence($sentence) {
return implode(' ',array_reverse(preg_split("/[\s,]+/",$sentence)));    
}

