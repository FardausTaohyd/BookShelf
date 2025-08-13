// Example: highlight table row on hover
document.querySelectorAll("tr").forEach(row => {
    row.addEventListener("mouseover", () => row.style.backgroundColor = "#f0f0f0");
    row.addEventListener("mouseout", () => row.style.backgroundColor = "");
});
