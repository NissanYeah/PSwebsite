// 檢查留言是否填寫
function check_fillout() {

    var nickname = document.getElementById("nickname");
    var comment = document.getElementById("comment");
    if (nickname.value.length == 0) {
        alert("請輸入暱稱");
    } else if (comment.value.length == 0) {
        alert("請輸入留言");
    } else
        myform.submit();
}

// function check_response_fillout() {
//     if (respons_nickname.value.length == 0) {
//         alert("請輸入暱稱");
//     } else if (respons_comment.value.length == 0) {
//         alert("請輸入留言");
//     } else
//         myform2.submit();
// }