<div class="content-wrapper">

  <section class="content-header">
    
    <h1>
      
      Administrar Empleados
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Empleados</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
          
          Agregar empleado

        </button>

      </div>

      <div class="box-body">
        
       <table class="table table-bordered table-striped dt-responsive tablas">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Apaterno</th>
           <th>Email</th>
           <th>Telefono</th>
           <th>Ext</th>
           <th>Area</th>
           <th>Status</th>
           <th>Acciones</th>
           
         </tr> 

        </thead>

        <tbody>

          <tr>
            

            <td>1</td>
            <td>jhon</td>
            <td>snow</td>
            <td>jhon_show@hotmail.com</td>
            <td>0199384757</td>
            <td>54</td>
            <td>ventas</td>
            <td>activo </td>
            <td>
              
               <div class="btn-group">
                  <button class="btn btn-success"><i class="fa fa-address-book-o"></i> Ver mas..</button>
                <button class="btn btn-warning"><i class="fa fa-pencil"></i></button>

                <button class="btn btn-danger"><i class="fa fa-times"></i></button>

              </div>  
            </td>

          </tr>
          
      

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>
<!--=====================================
MODAL AGREGAR EMPLEADO
======================================-->

<div id="modalAgregarEmpleado" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Empleado</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </div>

      </form>

    </div>

  </div>

</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, impedit! Placeat adipisci rem suscipit, dolore ea fuga incidunt illo, quasi, nesciunt sapiente blanditiis tempore aliquam, quod veritatis! Error animi, fugit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit voluptatibus vel cum, incidunt dolore nobis, repudiandae quisquam sit minima dolorem molestias, iure quas alias, voluptas quos! Hic vitae accusamus, et.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non voluptas, facilis voluptatibus asperiores maxime repudiandae aut laboriosam, deleniti provident quas officia perspiciatis nisi quis voluptate, mollitia deserunt reiciendis hic cum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi laboriosam laborum natus sint nam voluptatem quidem architecto nemo odit nostrum repellat, odio laudantium esse numquam mollitia magnam vel fugit culpa.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime dolorem, similique quae neque optio fuga placeat sed hic expedita perferendis animi, velit temporibus repudiandae deleniti dolorum, quas iure nobis. Doloribus.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quasi, consectetur laudantium porro voluptas quibusdam, doloribus beatae exercitationem omnis ipsum ea quia distinctio impedit voluptatibus aspernatur dolore velit nulla rem.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae modi, laborum! Quasi iste, libero doloribus? Voluptates odio, porro harum. Laboriosam aliquam eveniet iste aperiam id nulla architecto aut, qui officia!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur enim porro quasi dolor accusamus numquam. Eligendi dolor quidem debitis consectetur blanditiis voluptatum corrupti, est at iure et, rem enim cum.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quos quasi magnam minima totam nemo, ipsam odit maiores, tempora quibusdam reprehenderit, veritatis facere ullam repudiandae sed ad alias necessitatibus impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit, similique eos in incidunt magni nisi atque dolor voluptas doloribus consequuntur ipsa voluptatibus soluta qui, ad blanditiis provident laborum impedit odio!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique animi accusamus voluptas voluptate! Nemo error quas voluptate quia dolorem voluptas necessitatibus unde nihil nostrum laborum doloremque reprehenderit delectus ab, tempore?Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, eius deserunt nam aliquam dolorem officia dolor sequi asperiores, possimus velit doloremque, perferendis beatae ipsum fugit aspernatur consequuntur vel nulla. Velit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi dolore rem repellendus sed nemo atque, est fugiat, omnis earum. Necessitatibus saepe odio assumenda voluptas a quaerat reiciendis sunt ipsa quis.


      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis, laudantium, fugiat. Exercitationem perferendis facilis adipisci unde laudantium tempore accusantium dolor assumenda veritatis, hic velit delectus consequuntur, alias consectetur illo dolores.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil quo assumenda deleniti dolor, itaque excepturi voluptas, qui eos vel, molestiae esse omnis distinctio voluptate? Molestiae minima, laudantium officia excepturi facere!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat asperiores dolores rem magni vero ipsa numquam molestias fugiat, praesentium atque molestiae voluptatibus nihil officia, consequuntur ipsum dignissimos ipsam! Vero, labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, possimus, sapiente. Quod nemo debitis eum ducimus praesentium cum ad repellat. Aliquid incidunt hic doloribus officiis sit, dignissimos laboriosam adipisci ipsam.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quae, eligendi voluptate aspernatur, sunt ipsum nihil fuga, dolore similique fugiat iusto molestiae eius! Fugit molestiae modi dicta, ullam voluptas dolore!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit nisi eaque pariatur saepe asperiores perferendis, odit beatae expedita illum voluptatum, similique tempore fugit suscipit quas, esse accusantium nobis dolorem cumque?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>