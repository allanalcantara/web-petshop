if Seletor.Text = 'LOJA' then
    begin
      // ShowMessage('Escolheu PROCFIT');
      if buscador.Text = '' then
      begin
        // ShowMessage('Preencha os Dados de Pesquisa');
        Application.MessageBox('Preencha os Dados Para Efetuar a Pesquisa',
          'MENSAGEM DE AVISO', 0)
      end
      else
      begin
        SQLInsert();
        DMS.qryLoja.SQL.Add('FROM LOJAS WHERE LOJA_PROC LIKE ''%'+ buscador.Text + '%''');
        DMS.qryLoja.Open;

        if DMS.qryLoja.IsEmpty then
        begin
          Application.MessageBox('Registro Não Encontrado', 'MENSAGEM DE AVISO', 0)
        end
        else
        begin

           ListarLoja();

          DMS.Conexao.Close;
        end
      end
    end