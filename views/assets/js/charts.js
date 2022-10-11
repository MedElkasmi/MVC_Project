
// DATA CHART BELONG TO hresoures PAGE

const labels = [
    'TeamLeader',
    'Mailers',
    'Offer Manager',
    'Security',
    ' IT TEAM'
  ];

  //Data 
  const data = {
    labels: labels,
    datasets: [{
      label: 'Employes Data',
      data: [0, 10, 5, 2, 20],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
    ],
    borderWidth: 1
    }]
  };

  //config
  const config = {
    type: 'doughnut',
    data: data,
    options: {  
      responsive: true,
      maintainAspectRatio: false
  }
  };

  //View
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );

  // DATA CHART BELONG TO hresoures PAGE? LOOK UP
  // *********************************************


const vacation = [
    'Day 10',
    'Day 20',
    'Day 30',
    'Day 40',
    'Day 50'
  ];

  //Data 
  const VacationData = {
    labels: vacation,
    datasets: [{
      label: 'Vacation Data',
      data: [0, 10, 5, 2, 20, 2, 6],
      backgroundColor: [
        'rgba(255, 99, 132, 0.2)',
        'rgba(54, 162, 235, 0.2)',
        'rgba(255, 206, 86, 0.2)',
        'rgba(75, 192, 192, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)'
      ],
      borderColor: [
        'rgba(255, 99, 132, 1)',
        'rgba(54, 162, 235, 1)',
        'rgba(255, 206, 86, 1)',
        'rgba(75, 192, 192, 1)',
        'rgba(153, 102, 255, 1)',
        'rgba(255, 159, 64, 1)'
    ],
    borderWidth: 1
    }]
  };

  //config
  const VacationConfig = {
    type: 'line',
    data: VacationData,
    options: {  
      responsive: true,
      maintainAspectRatio: false
  }
  };

  //View
  const VacationChart = new Chart(
    document.getElementById('VacationChart'),
    VacationConfig
  );
