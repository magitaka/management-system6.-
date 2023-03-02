let button = document.querySelector("button");

// clickイベントを登録します 
button.addEventListener('click', function() {
    // div要素の中身は「clickされました」となります。
    let el = document.querySelector("div");
    this.textContent = "clickされました"; 
});
