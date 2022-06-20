export const planetChartData = {
  type: "bar",
  data: {
    labels: ["Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune"],
    datasets: [
      // {
      //   label: "Planetary Mass (relative to the Sun x 10^-6)",
      //   data: [0.166, 2.081, 3.003, 0.323, 954.792, 285.886, 43.662, 51.514],
      //   backgroundColor: "rgba(71, 183,132,.5)",
      //   borderColor: "#47b784",
      //   borderWidth: 3,
      //   order: 2,
      // },
      {
        label: "Planets gravity (m/s2)",
        type: "bar",
        data: [3.7,	8.9,	9.8,	1.6,	3.7,	23.1,	9.0,	8.7,	11.0,	0.7],
        backgroundColor: "rgba(255, 174, 0, .35)",
        borderColor: "#ffae00",
        borderWidth: 3,
        order: 2,
      },
      {
        label: "Planets Escape Velocity (km/s)",
        type: "bar",
        data: [4.3,	10.4,	11.2,	2.4,	5.0,	59.5,	35.5,	21.3,	23.5,	1.3],
        backgroundColor: "rgba(71, 183,132,.5)",
        borderColor: "#47b784",
        borderWidth: 3,
        order: 2,
      },
      {
        label: "Number of Moons",
        type: "line",
        data: [0, 0, 1, 2, 79, 82, 27, 14],
        backgroundColor: "rgba(54,73,93,.5)",
        borderColor: "#36495d",
        borderWidth: 3,
        order: 1,
      },
      // {
      //   label: "Planet length of day",
      //   type: "line",
      //   data: [4222.6,	2802.0,	24.0,	708.7,	24.7,	9.9, 10.7,	17.2,	16.1,	153.3],
      //   backgroundColor: "rgba(255, 174, 0, .35)",
      //   borderColor: "#ffae00",
      //   borderWidth: 3,
      //   order: 1,
      // },
    ]

  },
  options: {
    responsive: true,
    lineTension: 1,
    scales: {
      x: {
        stacked: true,
      },
      y: {
        stacked: true,
        ticks: {
          beginAtZero: true,
          padding: 25
        }
      },
    }
  }
};

export default planetChartData;