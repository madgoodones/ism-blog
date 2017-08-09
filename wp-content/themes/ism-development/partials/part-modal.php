<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="myModalLabel">Solicite um contato da nossa equipe</h3>
            </div>
            <div class="modal-body">
                <form class="forms">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nome</label>
                        <input type="text" class="form-control" name="Nome" id="name" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">E-Mail</label>
                        <input type="email" class="form-control" name="E-mail" id="email" placeholder="" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Telefone</label>
                        <input type="tel" class="form-control" name="Telefone" id="phone" placeholder="" required>
                    </div>

                    <div class="form-group">
                        <label for="formGroupExampleInput2">Mensagem</label>
                       <textarea class="form-control" name="Mensagem" id="message" rows="3" required></textarea>
                    </div>

                    <input type="hidden" name="Assunto" value="Solicitar um contato (Blog ISM)">

                     <div class="form-group">
                        <label for="formGroupExampleInput2">Seguro Desejado</label>
                    <select class="form-control" name="Seguro" required="">
                        <optgroup label="Pessoa Física">
                            <option value="Automóvel">Automóvel</option>
                            <option value="Residencial">Residencial</option>
                            <option value="Vida">Vida</option>
                            <option value="Fiança Locatícia">Fiança Locatícia</option>
                            <option value="Seguro Pet">Seguro Pet</option>
                            <option value="Equipamentos Portáteis">Equipamentos Portáteis</option>
                        </optgroup>
                        <optgroup label="Pessoa Jurídica">
                            <option value="Saúde">Saúde</option>
                            <option value="Odontológico">Odontológico</option>
                            <option value="Seguro de Vida">Seguro de Vida</option>
                            <option value="Previdência Privada">Previdência Privada</option>
                            <option value="Saúde e Segurança Ocupacional">Saúde e Segurança Ocupacional</option>
                            <option value="Garantia e Fiança">Garantia e Fiança</option>
                            <option value="Crédito">Crédito</option>
                            <option value="Responsabilidade Civil">Responsabilidade Civil</option>
                            <option value="Frota de Veículos">Frota de Veículos</option>
                            <option value="Empresarial e Equipamentos">Empresarial e Equipamentos</option>
                            <option value="Transporte">Transporte</option>
                            <option value="Riscos de Engenharia">Riscos de Engenharia</option>
                        </optgroup>
                    </select>
                    </div>
                <div class="modal-footer">
            <div class="response" id="response">
              <p class="alert alert-success success message">Enviado com sucesso</p>
              <p class="alert alert-info waiting message">Enviando</p>
              <p class="alert alert-danger error message">Erro ao enviar</p>
            </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
                </form>
            </div>
        </div>
    </div>
</div>