document.getElementById("emailForm").addEventListener("submit", function (e) {
  e.preventDefault();
  const email = this.querySelector("input").value;
  alert(`Thanks for subscribing! We’ll keep you posted: ${email}`);
  this.reset();
});
