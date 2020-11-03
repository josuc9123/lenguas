 @extends('inicio.layout')   
 @section('content')
 

        </nav>
       
        <!-- End of Topbar -->


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Content Row -->
          <div class="row">

            <div class="col-xl-8 col-lg-7">

              <!-- Area Chart -->
                            <!-- Area Chart -->
                            <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Concentrado de calificacioness</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <!-- Nombre del curso -->
                    <p>Curso intermedio B1</p>
                    <br>
                    <table class="table">
                      <thead>
                        <tr>
                        <th >ID</th>
                          <th >No. Control</th>
                          <th >Nombre</th>
                          <th >Calificaciones</th>
                        
                         
                        </tr>
                        </thead>
                        @foreach($alumnos as $alumnos)
                        <form action="{{ route('formularios.formcalif') }}" method="POST"> 
                      <tbody>
                      
                        <tr>
                         
                          <!-- #Número ++-->
                          <th >{{ $alumnos->id}}</th>
                          <!-- No Control -->
                          <td>{{ $alumnos->no_control}}</td>
                          <!-- nombre alumno -->
                          <td>{{ $alumnos->nombre}}</td>
                          <!-- Calificación -->
                          @csrf
                          <td><input type="text" id="" name="calif" class="form-control" placeholder="calificaciones"></td>
                          </tr>
                          @endforeach
                          </tbody>  
                          
                         
                      
                      
                                          
                    </table>
                        
                      
                     
                    
                  </div> 
                 <!-- Botones -->
                    <div class="container" style="padding-top: 5%; ">
                          <table class="table">
                            <tr> 
                              <th><button class="btn btn-success" type="submit" >Guardar</button>   
                                <a href="calificacionparcial" type="button" class="btn btn-danger">Cancelar</a></th>
                            </tr>
                      
                            </form>
                           
                          </table>
                         
                     </div>
                  </div>                  
                </div>
              </div>

              
            </div>
          </div>

        </div>


    </div>
    

 @stop
    
    