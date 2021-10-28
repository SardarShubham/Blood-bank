// document.write("fds");
anychart.onDocumentReady(function() {
    anychart.theme(anychart.themes.darkEarth);
    var data = {
        header: ["Blood Group", "No of blood units available"],
        rows: [
            ["A", 100],
            ["B", 20],
            ["AB", 120],
            ["O", 28]
        ]
    };
    var chart = anychart.bar();
    chart.data(data);
    chart.title("dashboard");
    chart.container("blood_units");
    chart.draw();
});