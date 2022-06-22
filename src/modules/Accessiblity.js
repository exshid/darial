function Accessiblity() {
    const author = document.querySelector("#author");
    author.setAttribute("placeholder", "Name*");
    const authorLabel = document.querySelector(".comment-form-author label")
    authorLabel.classList.add("visually-hidden");
    const email = document.querySelector("#email");
    email.setAttribute("placeholder", "Email*");
    const emailLabel = document.querySelector(".comment-form-email label")
    emailLabel.classList.add("visually-hidden");
    const website = document.querySelector("#url");
    website.setAttribute("placeholder", "Website");
    const websiteLabel = document.querySelector(".comment-form-url label")
    websiteLabel.classList.add("visually-hidden");


}
if (typeof author !== "undefined") {
    Accessiblity()
}
export default Accessiblity
