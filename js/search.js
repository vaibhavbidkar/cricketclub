const searchInput = document.getElementById("searchInput");
const parentElement = document.getElementsByClassName("li");
const childElement = document.getElementsByClassName("name");


searchInput.addEventListener("keyup", (event) => {
    const { value } = event.target;
    
    const searchQuery = value.toLowerCase();
    
    for (let i=0;i<childElement.length;i++) {

        let name = childElement[i].textContent.toLowerCase();

        if (name.includes(searchQuery)) {
            parentElement[i].style.display = "block";
        } else {

            parentElement[i].style.display = "none";
        }
    }
});