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
                    <div class="card-header">Datos importantes</div>
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
                                    <td>Total de gestantes activas</td>
                                    <td><?= $activas ?> </td>
                                </tr>
                                <tr>
                                    <td>Gestantes de 10 a 14 años</td>
                                    <td><?= $_10_14 ?> (<?= round(($_10_14/$activas) * 100 , 1)?> %)</td>
                                </tr>
                                <tr>
                                    <td>Gestantes de 15 a 19 años</td>
                                    <td><?= $_15_19 ?> (<?= round(($_15_19/$activas) * 100 , 1)?> %)</td>
                                </tr>
                                <tr>
                                    <td>Gestantes de 20 a 34 años</td>
                                    <td><?= $_20_34 ?> (<?= round(($_20_34/$activas) * 100 , 1)?> %)</td>
                                </tr>
                                <tr>
                                    <td>Gestantes mayores de 35 años</td>
                                    <td><?= $_35 ?> (<?= round(($_35/$activas) * 100 , 1)?> %)</td>
                                </tr>
                                <tr>
                                    <td>Alto riesgo por consumo de SPA</td>
                                    <td><?= $riesgo_spa ?> (<?= round(($riesgo_spa/$activas) * 100 , 1)?> %)</td>
                                </tr>
                                <tr>
                                    <td>Victimas de violencia sexual y de género</td>
                                    <td><?= $violencia_intrafamiliar ?> (<?= round(($violencia_intrafamiliar/$activas) * 100 , 1)?> %)</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-header">Madres por municipio</div>
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
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                datasets: [{
                    label: 'Ingresos por mes',
                    data: [<?=$ingresos['data']?>],
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
            type: 'pie',
            data: {
                labels: [<?=$bar['labels']?>],
                datasets: [{
                    label: 'Ingresos por mes',
                    data: [<?=$bar['data']?>],
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
    })
</script>
 