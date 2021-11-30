<div class="page-content form-view">
   <div class="container-fluid">
      <div class="row align-items-end">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0 font-size-18"><?= $subtitle ?></h4>
               <div class="page-title-right">
                  <ol class="breadcrumb m-0">
                     <li class="breadcrumb-item"><a href="<?= base_url() ?>"><?= $title ?></a></li>
                     <li class="breadcrumb-item active"><?= $subtitle ?></li>
                  </ol>
               </div>
            </div>
         </div>
      </div>
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">Ingresos por mes</div>
                    <div class="card-body">
                        <canvas id="ingresos_mes" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">Estadistica 2</div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Descripción</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Gestantes Activas</td>
                                    <td><?= $activas ?></td>
                                </tr>
                                <tr>
                                    <td>Trabajadoras sexuales</td>
                                    <td><?= $trabajadoras_sexuales ?> (<?= ($trabajadoras_sexuales/$activas) * 100 ?>%)</td>
                                </tr>
                                <tr>
                                    <td>Alto riesgo por consumo de SPA</td>
                                    <td><?= $riesgo_spa ?> (<?= round(($riesgo_spa/$activas) * 100 , 1)?> %)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">Activas vs Asistentes</div>
                    <div class="card-body">
                        <canvas id="registradas_activas" width="400" height="400"></canvas>
                    </div>
                </div>
            </div>
        </div>
   </div>
   <!-- container-fluid -->
</div>

<script>
    jQuery(document).ready(function(){
        const ingresos_mes = document.getElementById('ingresos_mes').getContext('2d');
        const registradas_activas = document.getElementById('registradas_activas').getContext('2d');

        const IngresosMes = new Chart(ingresos_mes, {
            type: 'line',
            data: {
                labels: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio ", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
                datasets: [{
                    label: 'Ingresos por mes',
                    data: [12, 19, 3, 5, 2, 3, 12, 19, 3, 5, 2, 3],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
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
                        'rgba(255, 159, 64, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: false
            }
        });


        const RegistradasActivas = new Chart(registradas_activas, {
            type: 'doughnut',
            data: {
                labels: ["Activas", "Asistentes"],
                datasets: [{
                    label: 'Ingresos por mes',
                    data: [30, 14],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                maintainAspectRatio: false
            }
        });
    })
</script>
 