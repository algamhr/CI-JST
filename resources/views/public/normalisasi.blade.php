<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/home/style.css')}}">
    <title>Weather Prediction - Computational Intelligence</title>

    <link rel="stylesheet" href="{{asset('assets/admin/assets/css/demo/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/admin/assets/images/favicon.png')}}" />
    <link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css'>
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

</head>

<body style="background-image: linear-gradient(to right, #6574cd , #9561e2);">
    <div class="header">
        <div class="login">
            <a href="/home " style="text-decoration:none" class="loginhref"><img
                    src="{{asset('assets/admin/assets/images/user.png')}}" class="imguser"> LOGIN</a>
        </div>
        <div class="page-wrapper mdc-toolbar-fixed-adjust">
            <main class="content-wrapper">
                <section class="ftco-section contact-section">
                    <div class="container">
                        <div class="card">
                            <div class="card-body">
                                <div class="page-wrapper mdc-toolbar-fixed-adjust">
                                    <main class="content-wrapper">
                                        <div class="mdc-layout-grid">
                                            <div class="mdc-layout-grid__inner">
                                                <div
                                                    class="mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-6-desktop stretch-card">
                                                    <div class="mdc-card">
                                                        <h6 class="card-title">Pelatihan (Training)</h6>
                                                        <div class="template-demo">
                                                            <div
                                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                                    <input class="mdc-text-field__input" type="text"
                                                                        name="temp" id="epoch">
                                                                    <div class="mdc-notched-outline">
                                                                        <div class="mdc-notched-outline__leading"></div>
                                                                        <div class="mdc-notched-outline__notch">
                                                                            <label for="text-field-hero-input"
                                                                                class="mdc-floating-label" placeholder="Epoch"></label>
                                                                        </div>
                                                                        <div class="mdc-notched-outline__trailing">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                                    <input id="learn" class="mdc-text-field__input" type="text"
                                                                        name="lr" placeholder="Learning Rate">
                                                                    <div class="mdc-notched-outline">
                                                                        <div class="mdc-notched-outline__leading"></div>
                                                                        <div class="mdc-notched-outline__notch">
                                                                            <label for="text-field-hero-input"
                                                                                class="mdc-floating-label"></label>
                                                                        </div>
                                                                        <div class="mdc-notched-outline__trailing">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                                    <input class="mdc-text-field__input" type="text"
                                                                        name="nh" id="neuron">
                                                                    <div class="mdc-notched-outline">
                                                                        <div class="mdc-notched-outline__leading"></div>
                                                                        <div class="mdc-notched-outline__notch">
                                                                            <label for="text-field-hero-input"
                                                                                class="mdc-floating-label" placeholder="Neuron Hidden"></label>
                                                                        </div>
                                                                        <div class="mdc-notched-outline__trailing">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div
                                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-3-desktop">
                                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                                    <input class="mdc-text-field__input" type="text"
                                                                        name="e" id="error" placeholder="Error">
                                                                    <div class="mdc-notched-outline">
                                                                        <div class="mdc-notched-outline__leading"></div>
                                                                        <div class="mdc-notched-outline__notch">
                                                                            <label for="text-field-hero-input"
                                                                                class="mdc-floating-label"></label>
                                                                        </div>
                                                                        <div class="mdc-notched-outline__trailing">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            
                                                            <td>
                                                                <div class="template-demo">
                                                                    <button type="submit"
                                                                        class="mdc-button mdc-button--unelevated" onclick="latih();">
                                                                        Latih Data
                                                                    </button>
                                                            </td>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-6-desktop stretch-card">
                                                <div class="mdc-card">
                                                    <h6>Hasil</h6>
                                                        <textarea class="form-control" style="max-height: 500px; max-width: 200px;" id="hasil"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="mdc-layout-grid">
                                    <div class="mdc-layout-grid__inner">
                                        <div
                                            class="mdc-layout-grid__cell--span-12 mdc-layout-grid__cell--span-6-desktop stretch-card">
                                            <div class="mdc-card">
                                                <h6 class="card-title">Data Cuaca</h6>
                                                <h6 class="card-title card-padding pb-0"><a href="{{ route('normalisasi') }}"></a></h6>
                                               
                                                <div class="table-responsive">
                                                    <form action="/normalisasi" method="POST">
                                                        {{ csrf_field() }}
                                                            <div class="template-demo">
                                                                    <button type="submit"
                                                                        class="mdc-button mdc-button--unelevated">
                                                                        Normalisasi
                                                                    </button>
                                                    <table id="example" class="table">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-left">Tanggal</th>
                                                                <th>Suhu</th>
                                                                <th>Kelembaban</th>
                                                                <th>Kecepatan Angin</th>
                                                                <th>Weathersit</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach ($weather as $weather)

                                                            <tr>
                                                                <td class="text-left"><input type="hidden" name="dteday" value="{{$weather->dteday}}">{{$weather->dteday}}</td>
                                                                <td><input type="hidden" name="temp" value="{{$weather->temp}}">{{$weather->temp}}</td>
                                                                <td><input type="hidden" name="hum" value="{{$weather->hum}}">{{$weather->hum}}</td>
                                                                <td><input type="hidden" name="windspeed" value="{{$weather->windspeed}}">{{$weather->windspeed}}</td>
                                                                <td>{{$weather->weathersit}}</td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
            </main>
            <!-- partial -->
        </div>

        <script src='https://code.jquery.com/jquery-3.3.1.js'></script>
        <!-- Datatables -->
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
        <script src='https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js'></script>


        <script>
            $(document).ready(function () {
                $('#example').DataTable();
            });


            var data = {!! json_encode($normalisasi) !!};
            var temp = [];
            var hum = [];
            var windspeed = [];
            var weathersit = [];
            var max = 3;
            var min = 1;
            for(var i=0;i<30;i++){
                temp[i] = data[i].temp;
                hum[i] = data[i].hum;
                windspeed[i] = data[i].windspeed;
                weathersit[i] = data[i].weathersit;
            }
        

            function latih(){
                var epoch = document.getElementById('epoch').value;
                var learn = document.getElementById('learn').value;
                var neuron_h = document.getElementById('neuron').value;
                var neuron_i = 3;
                var error = document.getElementById('error').value;
                var hasil = document.getElementById('hasil');
                var i,j;
                var tran_wo = [];
                var sum_wo = 0;
                var k;
                var t_wo = [];
                var oh = [];
                var o = [];
                var b = [];
                var ah = [];
                var ao = [];
                var e = 2.71828183;
                var en = [];
                var eo = [];
                var eh = [];
                var wh = [];
                var wo = [];
                var bh = [];  // bias
                var bo = [];
                var delta_wo1 = [];
                var delta_wo2 = [];
                var delta_wo3 = [];
                var delta_wo4 = [];
                var delta_wo5 = [];
                var delta_b1 = [];
                var delta_b2 = [];
                var delta_w1 = [];
                var delta_w2 = [];
                var delta_w3 = [];
                var delta_w4 = [];
                var delta_w5 = [];
                var delta_w6 = [];
                var delta_w7 = []; //tranpose
                var delta_x1 = [];
                var delta_x2 = [];
                var delta_x3 = [];
                var new_wo = [];
                var new_w = [];
                var new_bo = [];
                var new_b = [];
                var mse;
                var output = [];
                var denormalisasi = [];
                var t_hasil = " ";

                for(var x=0;x<30;x++){
                    for (var i = 0; i < epoch; i++) {
                        output[x] = (Math.random());
                        if ((output[x] >= (parseFloat(weathersit[x])) && output[x] <= (parseFloat(weathersit[x]) + (learn))) && ((parseFloat(weathersit[x]) - output[x]) <= error)) {
                            break;
                        }
                    }
                    console.log("Output ke-"+(x+1)+" = "+output[x]);
                }
                
                // console.log(Math.random());
                console.log("Random bobot ke hidden");
                for(i=0;i<neuron_h;i++){
                    wh.push([]);
                    for(j=0;j<neuron_i;j++){
                        wh[i][j]=(Math.random());
                        console.log("["+i+"]["+j+"] = "+wh[i][j]);
                    }
                }
                console.log("Random bobot ke output");
                for(i=0;i<1;i++){
                    wo.push([]);
                    for(j=0;j<neuron_h;j++){
                        wo[i][j] = (Math.random());
                        console.log("["+i+"]["+j+"] = "+wo[i][j]);
                    }
                }
                console.log("Random bias ke hidden");
                for(i=0;i<neuron_h;i++){
                    bh.push([]);
                    for(j=0;j<1;j++){
                        bh[i][j] = (Math.random());
                        console.log("["+i+"]["+j+"] = "+bh[i][j]);
                    }
                }
                console.log("Random bias ke output");
                for(i=0;i<1;i++){
                    bo.push([]);
                    for(j=0;j<1;j++){
                        bo[i][j] = (Math.random());
                        console.log("["+i+"]["+j+"] = "+bo[i][j]);
                    }
                }

                console.log("transpose nilai bobot ke output");
                for(i = 0; i < neuron_h; i++){
                    tran_wo.push([]);
                    for (j = 0; j < 1; j++){
                        tran_wo[i][j] = parseFloat(wo[j][i]);
                        console.log("[" + i + "][" + j + "] = " + tran_wo[i][j]);
                    }
                }
                console.log("jumlah nilai bobot ke output");
                for (i = 0; i < 1; i++){
                    for (j = 0; j < neuron_h; j++){
                        sum_wo = parseFloat(sum_wo) + parseFloat(wo[i][j]);
                    }
                }
                console.log(sum_wo);
                for (i = 0; i < neuron_h; i++){
                    t_wo.push([]);
                    for (j = 0; j < 1; j++){
                        t_wo[i][j] = parseFloat(wo[j][i]) / parseFloat(sum_wo);
                    }
                }
                console.log("Fungsi aktivasi hidden");
                var row1 = [
                    [temp[0]],
                    [hum[0]],
                    [windspeed[0]]
                ];

                var target = [
                 [weathersit[0]]
                ];
                for (i = 0; i < neuron_h; i++) { //baris mat1
                        oh.push([]);
                        for (j = 0; j < 1; j++) { //kolom mat2
                            oh[i][j] = 0;
                            for (k = 0; k < neuron_i; k++) { //baris mat2
                                oh[i][j] += wh[i][k] * row1[k][j];
                            }
                        }
                    }
                for (i = 0; i < neuron_h; i++) {
                    ah.push([]);
                    for (j = 0; j < 1; j++) {
                        oh[i][j] = parseFloat(oh[i][j]) + parseFloat(bh[i][j]);
                        ah[i][j] = 1 / (1 + Math.pow(parseFloat(e), -oh[i][j]));
                        console.log("[" + i + "][" + j + "] = " + ah[i][j]);
                    }
                }
                console.log("Fungsi aktivasi output");
                for (i = 0; i < 1; i++) { //baris mat1
                    o.push([]);
                    for (j = 0; j < 1; j++) { //kolom mat2
                        o[i][j] = 0;
                        for (k = 0; k < neuron_h; k++) { //baris mat2
                            o[i][j] += wo[i][k] * ah[k][j];
                        }
                    }
                }
                for (i = 0; i < 1; i++) {
                    ao.push([]);
                    for (j = 0; j < 1; j++) {
                        o[i][j] = parseFloat(o[i][j]) + parseFloat(bo[0][0]);
                        ao[i][j] = 1 / (1 + Math.pow(parseFloat(e), -o[i][j]));
                        console.log("[" + i + "][" + j + "] = " + ao[i][j]);
                    }
                }
                console.log("Error Aktivasi Output");
                for (i = 0; i < 1; i++) {
                    eo.push([]);
                    for (j = 0; j < 1; j++) {
                        eo[i][j] = target[i][j] - ao[i][j];
                        console.log("[" + i + "][" + j + "] = " + eo[i][j]);
                    }
                }
                console.log("Error Aktivasi Hidden");
                for (i = 0; i < neuron_h; i++) { //baris mat1
                    eh.push([]);
                    for (j = 0; j < 1; j++) { //kolom mat2
                        eh[i][j] = 0;
                        for (k = 0; k < 1; k++) { //baris mat2
                            eh[i][j] += t_wo[i][k] * eo[k][j];
                            console.log("[" + i + "][" + j + "] = " + eh[i][j]);
                        }
                    }
                }
                console.log("Perubahan bobot hidden (wo)");
                console.log("delta_wo1");
                for (i = 0; i < 1; i++) {
                    delta_wo1.push([]);
                    for (j = 0; j < 1; j++) {
                        delta_wo1[i][j] = 1 - ao[i][j];
                        console.log("1 - " + ao[i][j] + " = " + delta_wo1[i][j]);
                    }
                }
                console.log("delta_wo2");
                for (i = 0; i < 1; i++) { //baris mat1
                    delta_wo2.push([]);
                    for (j = 0; j < 1; j++) { //kolom mat2
                        delta_wo2[i][j] = 0;
                        for (k = 0; k < 1; k++) { //baris mat2
                            delta_wo2[i][j] += ao[i][k] * delta_wo1[k][j];
                            console.log(ao[i][k] + " * " + delta_wo1[k][j] + " = " + delta_wo2[i][j]);
                        }
                    }
                }
                console.log("delta_wo3");
                for (i = 0; i < neuron_h; i++) { //baris mat1
                    delta_wo3.push([]);
                    for (j = 0; j < 1; j++) { //kolom mat2
                        delta_wo3[i][j] = 0;
                        for (k = 0; k < 1; k++) { //baris mat2
                            delta_wo3[i][j] += ah[i][k] * delta_wo2[k][j];
                            console.log(ah[i][k] + " * " + delta_wo2[k][j] + " = " + delta_wo3[i][j]);
                        }
                    }
                }
                console.log("delta_wo4");
                var new_learn = [
                    [learn]
                ];
                for (i = 0; i < 1; i++) { //baris mat1
                    delta_wo4.push([]);
                    for (j = 0; j < 1; j++) { //kolom mat2
                        delta_wo4[i][j] = 0;
                        for (k = 0; k < 1; k++) { //baris mat2
                            delta_wo4[i][j] += new_learn[i][k] * eo[k][j];
                            console.log(new_learn[i][k] + " * " + eo[k][j] + " = " + delta_wo4[i][j]);
                        }
                    }
                }
                console.log("delta_wo5");
                for (i = 0; i < neuron_h; i++) { //baris mat1
                    delta_wo5.push([]);
                    for (j = 0; j < 1; j++) { //kolom mat2
                        delta_wo5[i][j] = 0;
                        for (k = 0; k < 1; k++) { //baris mat2
                            delta_wo5[i][j] += delta_wo3[i][k] * delta_wo4[k][j];
                            console.log(delta_wo3[i][k] + " * " + delta_wo4[k][j] + " = " + delta_wo5[i][j]);
                        }
                    }
                }
                console.log("bobot hidden (wo) baru");
                for (i = 0; i < neuron_h; i++) {
                    new_wo.push([]);
                    for (j = 0; j < 1; j++) {
                        new_wo[i][j] = parseFloat(tran_wo[i][j]) + parseFloat(delta_wo5[i][j]);
                        console.log(tran_wo[i][j] + " + " + delta_wo5[i][j] + " = " + new_wo[i][j]);
                    }
                }
                console.log("nilai bobot ke output");
                for (i = 0; i < neuron_h; i++) {
                    wo.push([]);
                    for (j = 0; j < 1; j++) {
                        wo[i][j] = new_wo[i][j];
                    }
                }
                for (i = 0; i < 1; i++) {
                    wo.push([]);
                    for (j = 0; j < neuron_h; j++) {
                        wo[i][j] = wo[j][i];
                        console.log("[" + i + "][" + j + "] = " + wo[i][j]);
                    }
                }
                console.log("perubahan bias output");
                for (i = 0; i < 1; i++) { //baris mat1
                    delta_b1.push([]);
                    for (j = 0; j < 1; j++) { //kolom mat2
                        delta_b1[i][j] = 0;
                        for (k = 0; k < 1; k++) { //baris mat2
                            delta_b1[i][j] += delta_wo4[i][k] * delta_wo2[k][j];
                            console.log(delta_wo4[i][k] + " * " + delta_wo2[k][j] + " = " + delta_b1[i][j]);
                        }
                    }
                }
                console.log("bias output baru");
                for (i = 0; i < 1; i++) {
                    new_bo.push([]);
                    for (j = 0; j < 1; j++) {
                        new_bo[i][j] = parseFloat(bo[0][0]) + parseFloat(delta_b1[i][j]);
                        console.log(bo[0][0] + " + " + delta_b1[i][j] + " = " + new_bo[i][j]);
                    }
                }
                console.log("nilai bias output");
                for (i = 0; i < 1; i++) {
                    bo.push([]);
                    for (j = 0; j < 1; j++) {
                        bo[i][j] = new_bo[i][j];
                        console.log("[" + i + "][" + j + "] = " + bo[i][j]);
                    }
                }
                console.log("Perubahan bobot hidden (w)");
                console.log("delta_w1");
                for (i = 0; i < neuron_h; i++) {
                    delta_w1.push([]);
                    for (j = 0; j < 1; j++) {
                        delta_w1[i][j] = 1 - ah[i][j];
                        console.log("1 - " + ah[i][j] + " = " + delta_w1[i][j]);
                    }
                }
                console.log("delta_w2");
                for (i = 0; i < neuron_h; i++) {
                    delta_w2.push([]);
                    for (j = 0; j < 1; j++) {
                        delta_w2[i][j] = ah[i][j] * delta_w1[i][j];
                        console.log(ah[i][j] + " * " + delta_w1[i][j] + " = " + delta_w2[i][j]);
                    }
                }
                console.log("delta_w3");
                for (i = 0; i < neuron_h; i++) { //baris mat1
                    delta_w3.push([]);
                    for (j = 0; j < 1; j++) { //kolom mat2
                        delta_w3[i][j] = 0;
                        for (k = 0; k < 1; k++) { //baris mat2
                            delta_w3[i][j] += eh[i][k] * new_learn[k][j];
                            console.log(eh[i][k] + " * " + new_learn[k][j] + " = " + delta_w3[i][j]);
                        }
                    }
                }
                console.log("delta_w4");
                for (i = 0; i < neuron_h; i++) {
                    delta_w4.push([]);
                    for (j = 0; j < 1; j++) {
                        delta_w4[i][j] = delta_w3[i][j] * delta_w2[i][j];
                        console.log(delta_w3[i][j] + " * " + delta_w2[i][j] + " = " + delta_w4[i][j]);
                    }
                }
                console.log("delta_x1");
                for (i = 0; i < neuron_h; i++) {
                    delta_x1.push([]);
                    for (j = 0; j < 1; j++) {
                        delta_x1[i][j] = row1[0][0] * delta_w4[i][j];
                        console.log(row1[0][0] + " * " + delta_w4[i][j] + " = " + delta_x1[i][j]);
                    }
                }
                console.log("delta_x2");
                for (i = 0; i < neuron_h; i++) {
                    delta_x2.push([]);
                    for (j = 0; j < 1; j++) {
                        delta_x2[i][j] = row1[1][0] * delta_w4[i][j];
                        console.log(row1[1][0] + " * " + delta_w4[i][j] + " = " + delta_x2[i][j]);
                    }
                }
                console.log("delta_x3");
                for (i = 0; i < neuron_h; i++) {
                    delta_x3.push([]);
                    for (j = 0; j < 1; j++) {
                        delta_x3[i][j] = row1[2][0] * delta_w4[i][j];
                        console.log(row1[2][0] + " * " + delta_w4[i][j] + " = " + delta_x3[i][j]);
                    }
                }
                console.log("delta_w5");
                delta_w5 = delta_x1.concat(delta_x2, delta_x3);
                console.log(delta_w5);
                //  for (i = 0; i < (nh * ni); i++) {
                //      console.log("[" + i + "] = " + delta_w5[i]);
                //  }
                console.log("delta_w6");
                var help = 0;
                for (i = 0; i < neuron_h; i++) {
                    delta_w6.push([]);
                    for (j = 0; j < neuron_i; j++) {
                        delta_w6[i][j] = delta_w5[help]
                        help++;
                        console.log("[" + i + "][" + j + "] = " + delta_w6[i][j]);
                    }
                }
                console.log("bobot input (w) baru");
                for (i = 0; i < neuron_h; i++) {
                    new_w.push([]);
                    for (j = 0; j < neuron_i; j++) {
                        new_w[i][j] = parseFloat(wh[i][j]) + parseFloat(delta_w6[i][j]);
                        console.log(wh[i][j] + " + " + delta_w6[i][j] + " = " + new_w[i][j]);
                    }
                }
                console.log("nilai bobot ke hidden");
                for (i = 0; i < neuron_h; i++) {
                    wo.push([]);
                    for (j = 0; j < neuron_i; j++) {
                        wh[i][j] = new_w[i][j];
                        console.log("[" + i + "][" + j + "] = " + wh[i][j]);
                    }
                }
                console.log("perubahan bias hidden");
                for (i = 0; i < neuron_h; i++) { //baris mat1
                    delta_b2.push([]);
                    for (j = 0; j < 1; j++) { //kolom mat2
                        delta_b2[i][j] = 0;
                        for (k = 0; k < 1; k++) { //baris mat2
                            delta_b2[i][j] += delta_w3[i][k] * delta_w2[k][j];
                            console.log(delta_w3[i][k] + " * " + delta_w2[k][j] + " = " + delta_b2[i][j]);
                        }
                    }
                }
                console.log("bias hidden baru");
                for (i = 0; i < neuron_h; i++) {
                    new_b.push([]);
                    for (j = 0; j < 1; j++) {
                        new_b[i][j] = parseFloat(bh[i][j]) + parseFloat(delta_b2[i][j]);
                        console.log(bh[i][j] + " + " + delta_b2[i][j] + " = " + new_b[i][j]);
                    }
                }
                console.log("nilai bias hidden");
                for (i = 0; i < neuron_h; i++) {
                    b.push([]);
                    for (j = 0; j < 1; j++) {
                        bh[i][j] = new_b[i][j];
                        console.log("[" + i + "][" + j + "] = " + bh[i][j]);
                    }
                }
            }

        </script>
</body>

</html>
