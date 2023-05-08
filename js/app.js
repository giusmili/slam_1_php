document.addEventListener("DOMContentLoaded", e => {
  e.preventDefault();
  console.log(e.target);
  const msg = "Server : ";
  const el = document.querySelector("address");
  el.prepend(msg);
  const header = document.querySelector("header h1")

  /**
   * 
   * @param {*} n 
   * @returns 
   */
  const calc = n => {
    return n * n;
  };
  /**
   * 
   * @param {*} a 
   * @param {*} b 
   */
  let x = (a, b) => {};
  /* promise set timeout avec instance de constructeur*/
  const delay = (ms) => {
    return new Promise(resolve => setTimeout(resolve, ms));
  }
  
  delay(5000).then(() => {
    header.prepend("Super ")
    console.log('Cette ligne s\'affiche après un délai de 5 secondes');
  });
  //end promise
  
});