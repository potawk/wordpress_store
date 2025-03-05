// ボタンのクリックイベントを受け取った時の処理をJavaScriptで書いてください
const hamburgerMenu = document.querySelector('.hamburger-menu');

const navi = document.getElementById('hamburger-navigation');

// クリックイベントを受けっとたきにメニューの表示と非表示を切り替えるJavaScriptを書いてください
// hamburgerMenuのクリックイベント内で書いてください

// クリックイベントを受け取ったときにボタンの表示と非表示を切り替える処理をJavaScriptで書いてください

hamburgerMenu.addEventListener('click', function () {
		navi.classList.toggle('active');
		hamburgerMenu.classList.toggle('active');
});

// セクションをクリックした時にメニューを閉じる処理をJavaScriptで書いてください

// 「hamburger-menu-section」クラスを持つ要素を全て取得し、定数「hamburgerMenuSections」に代入しよう
const hamburgerMenuSections = document.querySelectorAll(
  '.hamburger-menu-section'
);

// 「hamburgerMenuSections」から繰り返し処理を使用し、「hamburgerMenuSection」を取得しよう
// それぞれのセクションでクリックイベントを追加しよう
// クリックイベント内でメニューとボタンから「active」クラスを削除してください
hamburgerMenuSections.forEach((hamburgerMenuSection) => {
  hamburgerMenuSection.addEventListener('click', function () {
    hamburgerMenu.classList.remove('active');
    navi.classList.remove('active');
  });
});