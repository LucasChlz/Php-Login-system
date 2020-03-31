const txt = document.querySelector('h1');

const Write = (e) => {
  const txtArr = e.innerHTML.split('');
  txt.innerHTML = '';
  txtArr.forEach((word, i) => {
      setTimeout(() => {
          e.innerHTML += word;
      }, 60 * i);
  })
}
Write(txt);