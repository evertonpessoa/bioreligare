{{--

    Este é o template de email usado quando uma pessoa se cadastra no formulário do site da bioreligare.
    O email enviado segue este html aqui.

    O fluxo inteiro desde o usuario preencher o formulário e enviar o email, depende dos seguintes arquivos:

    contact.blade.php (formulário html lá no site, que o usuário vê e preenche.)
    ContactController (Faz a validação dos dados + recebe o token @csrf + cria uma nova instancia da classe de email.)
    ContactFormEmail (Recebe o dado que vem do método post do controller, e encaminha ele pra este arquivo aqui, que vai formatar o email e encaminhar ele pro responsável pelo atendimento na bioreligare.)

--}}

<p>Um visitante do site preencheu o formulário para entrar em contato com a Clínica Bioreligare </p>

<strong> {{ $data['name'] }} </strong>,

<br>

<strong> {{ $data['email'] }} </strong>,

<br>

<strong> {{ $data['subject'] }} </strong>,

<br>

<p> {{ $data['message'] }} </p>

@if ($data['newsletter-optin'] === 'aceito-receber-novidades')
    <p> O usuário quer receber novidades da bioreligare no email dele. </p>,
@endif

@if ($data['newsletter-optin'] === null)
    <p> O usuário NÃO quer receber novidades da bioreligare no email dele. </p>,
@endif
