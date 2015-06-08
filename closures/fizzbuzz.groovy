(1..50).each {
  switch(true){
    case 0 == (it % 3) && 0 == (it % 5):
      println 'fizzbuzz';
      break;
    case 0 == (it % 3):
      println 'buzz';
      break;
    case 0 == (it % 5);
      println 'fizz';
      break;
    default:
      println it;
      break;
  }
}
