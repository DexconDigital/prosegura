<style>
    .color_boton {
        background-color: #808184;
    }
    .buscar{
        color: white;
    }
    .color_boton:hover {
        background-color: white;
        color: #212529;
    }
</style>


<!--Cuadro Nego-->
<div class="jumbotron  text-white" style="border-radius: inherit;background-color:#13294B;">
    <div class="container">
        <div class="col-lg-12 col-md-12  col-sm-12 mb-5">
            <h2 style="text-align: center;font-weight: 900;" class="margin-bottom: 26px;" class="display-4 text-center "> Encuentra tu inmueble ideal </h2>
        </div>
        <!--buscador-->
        <form>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6  col-sm-12 form-group clase_padin">
                    <input type="text" id='codigo_buscar' class="form-control rounded-0" placeholder="Código">
                </div>
                <div class="col-lg-3 col-md-6  col-sm-12 form-group clase_padin">
                    <select id="ciudad_buscar" class="form-control rounded-0 select_color">
                        <option selected value="0">Ciudad</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-12 form-group clase_padin">
                    <select id="barrio_buscar" class="form-control rounded-0 select_color">
                        <option selected value="0">Barrio</option>
                    </select>
                </div>
                <div class="col-lg-3 col-md-6  col-sm-12 form-group clase_padin">
                    <select id="tipo_inmueble_buscar" class="form-control rounded-0 select_color">
                        <option selected value="0"> Tipo de Inmueble</option>
                    </select>
                </div>
                <div class="col-lg-4 col-md-4 form-group clase_padin">
                    <select id="tipo_gestion_buscar" class="form-control rounded-0 select_color">
                        <option selected value="0">Tipo de gestión</option>
                    </select>
                </div>
                <div class="col-lg-4  col-md-4 form-group clase_padin">
                    <input type="text" id='precio_minimo_buscar' class="form-control rounded-0 select_color" placeholder="Precio Mínimo">
                </div>
                <div class="col-lg-4  col-md-4 form-group clase_padin">
                    <input type="text" id='precio_maximo_buscar' class="form-control rounded-0 select_color" placeholder="Precio Máximo">
                </div>
                <div class="col-lg-6  col-md-12 form-group color_boton">
                    <button type="button" id="buscar" class="btn btn-lg btn-block rounded-0 buscar">Buscar</button>
                </div>
        </form>
    </div>
    <!--fin del buscador-->
</div>

<!--Fin Cuadro negro-->