function PairSum($c1,$c2) {
  if ($c1=="Î") {
    if ($c2=="Â") return 120;
    if ($c2=="Í") return 112;
    if ($c2=="Ò") return 96;
    if ($c2=="Ñ") return 90;
    if ($c2=="Ğ") return 84;
    if ($c2=="Ë") return 81;
    if ($c2=="Ì") return 73;
    if ($c2=="Ã") return 67;
    if ($c2=="Ä") return 65;
    if ($c2=="É") return 50;
    if ($c2=="Á") return 50;
    if ($c2=="Å") return 36;
    return 0;
  }
  if ($c1=="Í") {
    if ($c2=="À") return 157;
    if ($c2=="Å") return 147;
    if ($c2=="Î") return 142;
    if ($c2=="È") return 113;
    if ($c2=="Û") return 46;
    if ($c2=="Í") return 43;
    if ($c2=="Ó") return 34;
    return 0;
  }
  if ($c1=="À") {
    if ($c2=="Ë") return 137;
    if ($c2=="Ò") return 66;
    if ($c2=="Ê") return 63;
    if ($c2=="Í") return 61;
    if ($c2=="Ç") return 61;
    if ($c2=="Ñ") return 54;
    if ($c2=="Â") return 46;
    if ($c2=="Ì") return 38;
    if ($c2=="Ğ") return 36;
    if ($c2=="ß") return 36;
    if ($c2=="Ä") return 31;
    return 0;
  }
  if ($c1=="Å") {
    if ($c2=="Í") return 110;
    if ($c2=="Ë") return 90;
    if ($c2=="Ğ") return 80;
    if ($c2=="Ò") return 62;
    if ($c2=="Ñ") return 60;
    if ($c2=="Ì") return 59;
    if ($c2=="Ã") return 51;
    if ($c2=="Ä") return 39;
    if ($c2=="É") return 36;
    if ($c2=="Â") return 33;
    return 0;
  }
  if ($c1=="Ò") {
    if ($c2=="Î") return 216;
    if ($c2=="Ü") return 89;
    if ($c2=="À") return 79;
    if ($c2=="Å") return 75;
    if ($c2=="È") return 55;
    if ($c2=="Â") return 40;
    if ($c2=="Ğ") return 37;
    return 0;
  }
  if ($c1=="Ñ") {
    if ($c2=="Ò") return 159;
    if ($c2=="Ê") return 68;
    if ($c2=="Å") return 63;
    if ($c2=="ß") return 45;
    if ($c2=="Ü") return 41;
    if ($c2=="Ë") return 39;
    if ($c2=="Î") return 37;
    return 0;
  }
  if ($c1=="Ë") {
    if ($c2=="À") return 108;
    if ($c2=="Î") return 88;
    if ($c2=="È") return 80;
    if ($c2=="Å") return 69;
    if ($c2=="Ü") return 55;
    return 0;
  }
  if ($c1=="Â") {
    if ($c2=="Î") return 106;
    if ($c2=="À") return 83;
    if ($c2=="Å") return 64;
    if ($c2=="È") return 60;
    if ($c2=="Ñ") return 50;
    if ($c2=="Û") return 36;
    return 0;
  }
  if ($c1=="Ğ") {
    if ($c2=="Î") return 102;
    if ($c2=="À") return 100;
    if ($c2=="Å") return 82;
    if ($c2=="È") return 68;
    if ($c2=="Ó") return 34;
    return 0;
  }
  if ($c1=="È") {
    if ($c2=="Ë") return 66;
    if ($c2=="Ò") return 56;
    if ($c2=="Í") return 55;
    if ($c2=="Ì") return 42;
    if ($c2=="Â") return 38;
    if ($c2=="Å") return 36;
    if ($c2=="Ñ") return 34;
    return 0;
  }
  if ($c1=="Ê") {
    if ($c2=="Î") return 116;
    if ($c2=="À") return 113;
    if ($c2=="È") return 39;
    return 0;
  }
  if ($c1=="Ï") {
    if ($c2=="Î") return 121;
    if ($c2=="Ğ") return 94;
    if ($c2=="Å") return 32;
    return 0;
  }
  if ($c1=="Ä") {
    if ($c2=="Å") return 69;
    if ($c2=="Î") return 64;
    if ($c2=="À") return 64;
    if ($c2=="È") return 31;
    return 0;
  }
  if ($c1=="Ì") {
    if ($c2=="Î") return 46;
    if ($c2=="È") return 43;
    if ($c2=="Å") return 43;
    if ($c2=="Ó") return 39;
    if ($c2=="À") return 38;
    return 0;
  }
  if ($c1=="×") {
    if ($c2=="Ò") return 62;
    if ($c2=="Å") return 50;
    if ($c2=="À") return 32;
    return 0;
  }
  if ($c1=="Ã") {
    if ($c2=="Î") return 122;
    return 0;
  }
  if ($c1=="Ç") {
    if ($c2=="À") return 79;
    return 0;
  }
  if ($c1=="Á") {
    if ($c2=="Û") return 60;
    return 0;
  }
  if ($c1=="Æ") {
    if ($c2=="Å") return 59;
    return 0;
  }
  if ($c1=="İ") {
    if ($c2=="Ò") return 41;
    return 0;
  }
  if ($c1=="Û") {
    if ($c2=="Ë") return 38;
    return 0;
  }
  if ($c1=="Ø") {
    if ($c2=="Å") return 36;
    return 0;
  }
  if ($c1=="Õ") {
    if ($c2=="Î") return 32;
    return 0;
  }
  return 0;}
