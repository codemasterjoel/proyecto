<style>
        @charset "UTF-8";

    /*----------------------------------------
    ESTILO DE LA PAGINA
    -----------------------------------------*/
    .baner{
        margin: 0px 0px -1px 0px;
    }
    .page_break {
        page-break-before: always;
    }

    .foto {
        width: 100%;
        height: 290px;
        background-size: cover;
        object-fit: cover;
        margin: 8px 0px 0px 0px;
    }

    .formulario{
        padding-top: 8px;
        padding-bottom: 8px;
    }
    .titulo{
        
        background: brown;
        text-align: center;
        color:#ffffff;
        text-shadow: 1px 1px 0.5px #1c1c1c;
        
    }

    label{
        margin-bottom: 0px !important;
    }

    .datos{
    
        padding:5px 0px 0px 5px;
        border-bottom: 1px solid #e3e3e3;
        
    }
    .infor{
        padding:5px 0px 0px 10px;
    
    }

    .tablatitulo {
        background: #e3e3e3;
        text-align: center;
        
    }
    .table th, .table td {
        
        text-align: center !important ;
        
    }

    .color1{
        background: #fafafa;
    }
    .color2 {
        color:  brown;
        padding:5px 0px 0px 5px;
    }
    /*----------------------------------------
    SECCION PIE DE PAGINA
    -----------------------------------------*/
    .piedepagina {
    background: #111111;
    color: #fff;
    text-align: center;
    font-size: .9rem;
    padding: 20px;
    height: initial;
    }

    .piedepagina .redes-sociales {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
        -ms-flex-pack: center;
            justify-content: center;
    list-style: none;
    margin: 0;
    padding: 0; }

    .piedepagina .redes-sociales a {
    color: #fff;
    font-size: 2rem;
    margin: 0 .5rem;
    opacity: .7;
    -webkit-transition: all .5s ease;
            transition: all .5s ease; }

    .piedepagina .redes-sociales a:hover {
    opacity: 1; }

    .ir-arriba {
    position: fixed;
    bottom: 1rem;
    right: 1rem;
    font-size: 3rem;
    color: #12afaf;
    text-decoration: none;
    z-index: 99999;
    line-height: 0;
    display: none;
    -webkit-transition: all .5s ease;
            transition: all .5s ease; }

    .ir-arriba:hover,
    .ir-arriba:focus {
    outline: 0;
    text-decoration: none;
    color: #fff; }
    /*----------------------------------------
    MAX-WIDTH 767
    -----------------------------------------*/
    @media (max-width: 767px){
        
        .baner{
        margin: 0px 0px 8px 0px;
    }
    .foto {
        height: 100%;
        margin-bottom: 20px;
        margin: -8px 0px 0px 0px;
    } 
        
    .datos{
    background: #fafafa;
        padding:5px 0px 0px 5px;
    
        
    }
    .infor{
        padding:5px 0px 0px 0px;
    
    }

    .color1{
        background: #ffffff;
    }
    .color2 {
        color:  brown;
        padding:5px 0px 0px 0px;
    }
    }
</style>


<div>
    <div class="row">
        <div>
            <div class="watermark" style="position:absolute;top:0px;left:0px;text-align:center;z-index:-1000;">
                <img src="assets/img/card_from.jpg" style="width:634px;height:404px;"/>
            </div>
            <div style="position:absolute;top:112px;left:126px;width:500px;font-size:18px;font-weight: bold;">
                <p>
                    <span t-esc="upper(o.partner_card_id.name)">Joel</span>
                    <span></span>
                    <span t-esc="upper(o.partner_card_id.name2)">Antonio</span>
                </p>
            </div>
            <div style="position:absolute;top:153px;left:135px;width:500px;font-size:18px;font-weight: bold;">
                <p>
                    <span t-esc="upper(o.partner_card_id.apellido1)">Zerpa</span>
                    <span></span>
                    <span t-esc="upper(o.partner_card_id.apellido2)">Guerrero</span>
                </p>
            </div>
            {{-- <div style="position:absolute;top:208px;left:66px;width:200px;font-size:18px;font-weight: bold;">
                <p>
                    <span t-field="o.partner_card_id.birtday">17/10/1990</span>
                </p>
            </div> --}}
            <div style="position:absolute;top:224px;left:194px;width:200px;font-size:18px;font-weight: bold;">
                <p>
                    <span t-field="o.partner_card_id.fecha_nacimiento">17/10/1990</span>
                </p>
            </div>
            <div style="position:absolute;top:259px;left:130px;width:200px;font-size:18px;font-weight: bold;">
                <p>
                    <span t-field="o.create_date" t-field-options='{"format":"dd/MM/Y"}'>30/11/2024</span>
                </p>
            </div>
            <div class="watermark" style="position:absolute;top:102px;height:100%;width:100%;text-align:center;z-index:999;">
                <img class="foto" src="assets/img/marie.jpg" style="width:50mm;height:55mm;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover; background-size: cover;background-repeat: no-repeat;background-attachment: fixed; "></img>
            </div>
        </div>
    </div>
    <div class="page_break">
    <div class="row">
        <div class="watermark" style="position:absolute;top:0px;left:0px;text-align:center;z-index:-999;">
            <img src="assets/img/card_back.jpg" style="width:630px;height:401px;"/>
        </div>
        <div class="watermark" style="position:absolute;top:159px;left:14px;height:100%;width:100%;z-index:1000;">
            <img class="qr-code" src="assets/img/descarga.png" style="width:53mm;height:53mm;"></img>
        </div>
        <div style="position:absolute;top:54px;left:164px;width:250px;font-size:18px;color:White;font-weight: bold;">
            <p>
                <span t-field="o.card_number">S-121121</span>
            </p>
        </div>
        <div style="position:absolute;top:83px;left:164px;width:250px;font-size:18px;color:White;font-weight: bold;">
            <p>
                <span t-field="o.partner_card_id.serial_ciudadano">P-12121211</span>
            </p>
        </div>
    </div>
</div>