const BASE = "http://localhost:8000/";
const PAGES = {
    CREATE_ITEM: "create_item",
    INDEX: "index",
}
function redirect(page) {
    window.location.href= BASE + page + ".php";
}