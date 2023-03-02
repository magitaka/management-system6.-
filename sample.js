// document.getElementById("id名") で取得します
let title = document.getElementById("title");
console.log(title); // <h1 id="title">JavaScriptの基礎</h1>
title.textContent = "JavaScriptのDOM操作";
// 文字色を白色に
title.style.color = "#FFF";
// 文字サイズを2em
title.style["font-size"] = "2em";
// 文字の太さを標準
title.style["font-weight"] = "normal";
// 2pxの黒色の枠線
title.style.border = "2px solid #000";
// paddingを四方に10px
title.style.padding = "10px";
// marginを四方に5px
title.style.margin = "5px";
// 幅を90%
title.style.width = "90%";
// 背景色を灰色に
title.style["background-color"] = "#BBB";
// 角を10px半径で丸める
title.style["border-radius"] = "10px";
// 文字の影を設定
title.style["text-shadow"] = "0 0 2px #000, 0 0 2px #000";
// クラスを追加します。
title.classList.add("test-class");

// クラスを削除します。
title.classList.remove("test-class");

// クラスがなければ追加、あれば削除します
title.classList.toggle("test-class");

// クラスがあるかどうかを返します
// 例では追加して削除して追加しているのでtrueです。
console.log(title.classList.contains("test-class"));

// 属性の追加
// 要素.setAttribute(属性名, 属性値);
title.setAttribute("name", "header"); // <h1 name="header">Hello world!</h1>

// 属性の取得
// 要素.getAttribute(属性名)
console.log(title.getAttribute("name")); // name

// 属性を保持しているか
// hasAttribute(属性名)
title.hasAttribute("name"); // true

// 属性の削除
// removeAttribute(属性名)
title.removeAttribute("name");

// 1. 子要素オブジェクトを生成する
let child = document.createElement("p");

// 2. 子要素オブジェクトのテキストコンテントや属性の追加などを行う
child.textContent = "追加された要素";

// 3. 親要素オブジェクトを取得する
let parent = document.getElementById("parent_element");

// 4. 親要素オブジェクトに子要素オブジェクトを追加する
// 親要素.appendChild(子要素); で要素が追加されます
parent.appendChild(child);

// 要素の削除
child.remove();

// 要素の非表示 (非削除)
parent.style.visibility = "hidden";