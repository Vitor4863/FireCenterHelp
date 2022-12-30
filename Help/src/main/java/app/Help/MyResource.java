package app.Help;

import jakarta.ws.rs.GET;
import jakarta.ws.rs.Path;
import jakarta.ws.rs.Produces;
import jakarta.ws.rs.QueryParam;
import jakarta.ws.rs.core.MediaType;
import jakarta.ws.rs.core.Response;
import modelo.ContaUsuario;
import servico.ContaUsuarioService;

/**
 * Root resource (exposed at "myresource" path)
 */
@Path("myresource")
public class MyResource {

    /**
     * Method handling HTTP GET requests. The returned object will be sent
     * to the client as "text/plain" media type.
     *
     * @return String that will be returned as a text/plain response.
     */
    @GET
    @Produces(MediaType.TEXT_PLAIN)
    public String getIt() {
        return "Got it!";
    }
    @GET
    @Produces(MediaType.APPLICATION_JSON)
    @Path("buscarUsuario")
    public Response buscarusuario(@QueryParam("id")int id) {
    	ContaUsuarioService servico = new ContaUsuarioService();
    	ContaUsuario usuario = servico.buscarPorId(id);
    	Response response = Response.ok().entity(usuario).build();
		return response;
    
    }
   
}
