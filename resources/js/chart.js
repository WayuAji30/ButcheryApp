const labels = ["September", "Oktober", "November"];

function generateRandomData() {
  const randomData = [];
  for (let i = 0; i < 12; i++) {
    const randomValue = Math.floor(Math.random() * 1000);
    randomData.push(randomValue);
  }
  return randomData;
}

      const data = {
        labels: labels,
        datasets: [
          {
            label: "Sapi",
            backgroundColor: "#d10b05",
            borderColor: '#d10b05',
            data: generateRandomData(),
            fill: false,
          },
          {
            label: "Ayam",
            backgroundColor: "pink",
            borderColor: 'pink',
            data: generateRandomData(),
            fill: false,
          },
          {
            label: "Ikan",
            backgroundColor: "#252422",
            borderColor: '#252422',
            data: generateRandomData(),
            fill: false,
          },
          {
            label: "Udang",
            backgroundColor: "#fadbd6",
            borderColor: '#fadbd6',
            data: generateRandomData(),
            fill: false,
          },
          {
            label: "Bebek",
            backgroundColor: "#e5d5d2",
            borderColor: '#e5d5d2',
            data: generateRandomData(),
            fill: false,
          },
        ],
      };

      const configLineChart = {
        type: "bar",
        data,
        options: {},
      };

      var chartLine = new Chart(
        document.getElementById("chartLine"),
        configLineChart
      );