const btn_polindrome=document.getElementById('btn_polindrome');
const text_polindrome=document.getElementById('text_polindrome');
const text_result_polindrome=document.getElementById('text_result_polindrome');

let checkPolindrome = (e) =>{
    let url_polindrome="http://127.0.0.1:80/xampp/palindrome_string.php?string=".concat(text_polindrome.value);
    console.log(url_polindrome)
    fetch(url_polindrome)
    .then((response) => response.json())
    .then((data) => {
    text_result_polindrome.innerText=Object.values(data)[0];
  });
}
btn_polindrome.addEventListener("click",checkPolindrome);