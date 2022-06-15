function pallindrome(){

    let reverse = "";
const string = prompt('Enter a string: ');
for (let i=string.length-1;i>=0;i--){
    reverse=reverse+string[i];
}
if(string==reverse){
 console.log(string + " is pallindrome");
}
 else {
     console.log(string + "is not pallindrome");
 }
}
pallindrome();