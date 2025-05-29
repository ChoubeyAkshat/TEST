document.getElementById("emailForm").addEventListener("submit", function (e) {
  const email = this.querySelector("input").value;
  alert(`Thanks for subscribing! We’ll keep you posted: ${email}`);
});
