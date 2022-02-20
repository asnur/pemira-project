// Set new default font family and font color to mimic Bootstrap's default styling
$.get("/api/countVoting").done((res) => {
    // console.log(res.data);
    const data = res.data;
    (Chart.defaults.global.defaultFontFamily = "Nunito"),
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = "#858796";

    // Pie Chart Example
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: ["Kandidat 1", "Kandidat 2"],
            datasets: [
                {
                    data: [data[0].jumlah_suara, data[1].jumlah_suara],
                    backgroundColor: ["#4e73df", "#1cc88a"],
                    hoverBackgroundColor: ["#2e59d9", "#17a673"],
                    hoverBorderColor: "rgba(234, 236, 244, 1)",
                },
            ],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
                backgroundColor: "rgb(255,255,255)",
                bodyFontColor: "#858796",
                borderColor: "#dddfeb",
                borderWidth: 1,
                xPadding: 15,
                yPadding: 15,
                displayColors: false,
                caretPadding: 10,
            },
            legend: {
                display: false,
            },
            cutoutPercentage: 80,
        },
    });
});
