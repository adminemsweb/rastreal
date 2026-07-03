<?php $videoAvailable = is_file(BASE_PATH . '/public/videos/rastreall-institucional.mp4'); $solutions = [
    ['pin', 'Rastreamento veicular', 'Localização precisa, cercas virtuais e histórico completo da operação.'],
    ['pulse', 'Telemetria avançada', 'Converta dados do veículo em decisões sobre condução, consumo e manutenção.'],
    ['route', 'Gestão de rotas', 'Planeje trajetos mais eficientes e acompanhe cada entrega em tempo real.'],
    ['shield', 'Segurança operacional', 'Alertas inteligentes, bloqueio e resposta rápida a eventos críticos.'],
    ['sensor', 'Sensores e temperatura', 'Controle portas, baú, combustível e cadeia fria com rastreabilidade.'],
    ['camera', 'Videotelemetria', 'Contexto visual para reduzir riscos e desenvolver uma direção mais segura.'],
];
?>
<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Rastreall</title>
  <link rel="icon" type="image/png" href="/images/icon.png">
  <link rel="apple-touch-icon" href="/images/icon.png">
  <meta name="description" content="Rastreamento veicular, telemetria e gestão de frotas em tempo real. Mais controle, segurança e eficiência para sua operação.">
  <meta name="theme-color" content="#00172F">
  <meta property="og:title" content="Rastreall — Sua frota, sob controle.">
  <meta property="og:description" content="Tecnologia para transformar dados da sua frota em decisões melhores.">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://rastreall.com.br/">
  <link rel="canonical" href="https://rastreall.com.br/">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/assets/style.css">
  <script type="application/ld+json">{"@context":"https://schema.org","@type":"Organization","name":"Rastreall","description":"Tecnologia em rastreamento veicular, telemetria e gestão de frotas","url":"https://rastreall.com.br","sameAs":["https://www.instagram.com/rastreall_/"],"contactPoint":{"@type":"ContactPoint","telephone":"+55-15-99789-9346","contactType":"sales","availableLanguage":"Portuguese"}}</script>
</head>
<body>
  <header class="header" id="header">
    <div class="header-inner">
      <div class="logo"><img src="/images/logo.png" alt="Rastreall" width="140" height="48"></div>
      <button class="menu-toggle" aria-label="Abrir menu" aria-expanded="false"><span></span><span></span></button>
      <nav class="nav" aria-label="Navegação principal">
        <a href="#solucoes">Soluções</a><a href="#tecnologia">Tecnologia</a><a href="#app">Aplicativo</a><a href="#sobre">Sobre</a>
        <a class="nav-cta" href="https://wa.me/5515997899346?text=Ol%C3%A1%20tenho%20interesse%20em%20adquirir%20o%20produto%20da%20rastreall..." target="_blank" rel="noopener">Solicitar demonstração <span>↗</span></a>
      </nav>
    </div>
  </header>

  <main>
    <section class="hero" id="inicio">
      <div class="hero-grid"></div><div class="orb orb-one"></div><div class="orb orb-two"></div>
      <div class="hero-content reveal">
        <div class="eyebrow light"><span></span> Tecnologia, conectividade e IoT</div>
        <h1>Soluções em rastreamento<br><em>e telemetria.</em></h1>
        <p>Gestão completa de frotas, monitoramento em tempo real e inteligência operacional para sua empresa reduzir custos e avançar com segurança.</p>
        <div class="hero-actions">
          <a class="btn btn-yellow" href="https://wa.me/5515997899346?text=Ol%C3%A1%20tenho%20interesse%20em%20adquirir%20o%20produto%20da%20rastreall..." target="_blank" rel="noopener">Quero uma demonstração <span>→</span></a>
          <a class="text-link" href="#solucoes">Explorar soluções <span>↓</span></a>
        </div>
      </div>
      <div class="dashboard-wrap reveal delay">
        <div class="signal-card"><span class="live-dot"></span><div><small>STATUS DA FROTA</small><strong>94% em operação</strong></div></div>
        <div class="dashboard">
          <div class="dash-top"><div class="mini-logo">R</div><div class="dash-search"></div><span>●</span><span>●</span></div>
          <div class="dash-body">
            <aside><i></i><i></i><i></i><i></i><i></i></aside>
            <div class="map">
              <svg viewBox="0 0 620 420" role="img" aria-label="Mapa ilustrativo com veículos monitorados">
                <defs><pattern id="grid" width="32" height="32" patternUnits="userSpaceOnUse"><path d="M32 0H0V32" fill="none" stroke="#dce4e9" stroke-width="1"/></pattern></defs>
                <rect width="620" height="420" fill="#eef3f4"/><rect width="620" height="420" fill="url(#grid)"/>
                <path d="M-10 320C90 300 88 145 210 165s120 110 218 50 112-90 205-66" fill="none" stroke="#fff" stroke-width="20"/>
                <path d="M20 35c80 65 124 55 161 142s93 127 178 115 137 24 167 126" fill="none" stroke="#fff" stroke-width="12"/>
                <path d="M-10 320C90 300 88 145 210 165s120 110 218 50 112-90 205-66" fill="none" stroke="#b9c8ce" stroke-width="2" stroke-dasharray="6 7"/>
                <g class="route-line"><path d="M92 290C137 259 142 184 213 172s133 89 214 42" fill="none" stroke="#00172f" stroke-width="4" stroke-dasharray="8 8"/></g>
                <g class="map-pin"><circle cx="92" cy="290" r="16" fill="#fef200"/><path d="m85 290 7-7 7 7-7 7z" fill="#00172f"/></g>
                <g class="map-pin pin2"><circle cx="428" cy="214" r="16" fill="#fef200"/><path d="m421 214 7-7 7 7-7 7z" fill="#00172f"/></g>
              </svg>
              <div class="map-card"><small>VEÍCULO 042</small><strong>Em movimento</strong><span>68 km/h · Atualizado agora</span></div>
            </div>
          </div>
        </div>
        <div class="phone"><div class="phone-notch"></div><div class="phone-head"><b>Rastreall</b><span>•••</span></div><div class="phone-map"><span class="phone-pin">●</span></div><div class="trip"><small>VEÍCULO EM ROTA</small><b>São Paulo → Campinas</b><div><span>72 km/h</span><span>1h 18min</span></div></div></div>
      </div>
      <div class="scroll-note">ROLE PARA DESCOBRIR <span>↓</span></div>
    </section>

    <section class="metrics" aria-label="Números Rastreall">
      <div class="metric reveal"><strong data-count="1000">+1.000</strong><span>veículos conectados</span></div>
      <div class="metric reveal"><strong>24/7</strong><span>suporte especializado</span></div>
      <div class="metric reveal"><strong>99,9%</strong><span>disponibilidade da plataforma</span></div>
      <div class="metric reveal"><strong>Tempo real</strong><span>decisões sem atraso</span></div>
    </section>

    <section class="segments section">
      <div class="segments-head reveal"><div class="eyebrow"><span></span> Soluções para cada operação</div><h2>O que você precisa<br><em>monitorar?</em></h2><p>Da mobilidade urbana às operações de campo, a Rastreall adapta tecnologia, equipamentos e indicadores à realidade do seu negócio.</p></div>
      <div class="segment-grid">
        <article class="segment-card reveal"><div class="segment-art"><img src="/images/segments/veiculos-leves.jpg" alt="Carro moderno monitorado pela Rastreall" loading="lazy" width="1000" height="667"></div><div class="segment-body"><span>01</span><h3>Veículos leves</h3><p>Carros, motos e utilitários protegidos com localização, alertas e histórico completo.</p></div></article>
        <article class="segment-card reveal"><div class="segment-art"><img src="/images/segments/maquinas-ativos.jpg" alt="Trator monitorado pela Rastreall" loading="lazy" width="1000" height="667"></div><div class="segment-body"><span>02</span><h3>Máquinas e ativos</h3><p>Equipamentos agrícolas, máquinas e ativos remotos sob controle, mesmo fora da estrada.</p></div></article>
        <article class="segment-card reveal"><div class="segment-art"><img src="/images/segments/frotas-logistica.jpg" alt="Caminhão de uma operação logística monitorada" loading="lazy" width="1000" height="667"></div><div class="segment-body"><span>03</span><h3>Frotas e logística</h3><p>Telemetria, rotas, jornada e produtividade para operações que não podem parar.</p></div></article>
      </div>
    </section>

    <section class="human-story section">
      <div class="story-media reveal">
        <?php if ($videoAvailable): ?><video controls preload="metadata" poster="/images/equipe-logistica.jpg"><source src="/videos/rastreall-institucional.mp4" type="video/mp4">Seu navegador não reproduz este vídeo.</video><?php else: ?><img src="/images/equipe-logistica.jpg" alt="Especialistas de logística conversando durante a operação" loading="lazy" width="1200" height="800"><?php endif; ?>
        <span class="story-label"><?= $videoAvailable ? 'ASSISTA À RASTREALL' : 'TECNOLOGIA FEITA PARA PESSOAS' ?></span>
      </div>
      <div class="story-copy reveal"><div class="eyebrow"><span></span> Por trás de cada dado</div><h2>Gente cuidando<br><em>da sua operação.</em></h2><p>Tecnologia só gera resultado quando entende a rotina de quem está na estrada, no campo e na gestão. Por isso, nossa equipe acompanha desde a implantação até a evolução diária da sua operação.</p><ul><li>Atendimento consultivo</li><li>Instalação e configuração técnica</li><li>Treinamento para sua equipe</li><li>Suporte quando você precisar</li></ul><a class="btn btn-dark" href="https://wa.me/5515997899346?text=Ol%C3%A1%20tenho%20interesse%20em%20adquirir%20o%20produto%20da%20rastreall..." target="_blank" rel="noopener">Falar com uma pessoa <span>→</span></a></div>
    </section>

    <section class="intro section" id="sobre">
      <div class="intro-title reveal"><div class="eyebrow"><span></span> O que fazemos</div><h2>Tecnologia e confiança<br><em>para sua operação.</em></h2></div>
      <div class="intro-copy reveal"><p>Somos especialistas em rastreamento, telemetria e IoT para empresas de todos os portes. Unimos software de ponta, equipamentos confiáveis e suporte especializado para entregar mais controle, segurança e redução de custos operacionais.</p><p>Nossa estrutura acompanha sua empresa em cada etapa, do planejamento à evolução contínua da operação.</p><a class="arrow-link" href="#tecnologia">Conheça nossa tecnologia <span>→</span></a></div>
    </section>

    <section class="solutions section" id="solucoes">
      <div class="section-head reveal"><div><div class="eyebrow"><span></span> Ecossistema completo</div><h2>Tudo o que sua frota precisa.<br><em>Em um só lugar.</em></h2></div><p>Do primeiro veículo a operações complexas: módulos que crescem junto com o seu negócio.</p></div>
      <div class="solution-grid">
        <?php foreach ($solutions as $i => $item): ?>
        <article class="solution-card reveal<?= $i === 0 ? ' featured' : '' ?>">
          <div class="icon icon-<?= e($item[0]) ?>"><?php include BASE_PATH . '/public/assets/icon.svg.php'; ?></div>
          <span class="card-num">0<?= $i + 1 ?></span><h3><?= htmlspecialchars($item[1]) ?></h3><p><?= htmlspecialchars($item[2]) ?></p>
        </article>
        <?php endforeach; ?>
      </div>
    </section>

    <section class="tech section" id="tecnologia">
      <div class="tech-visual reveal"><div class="radar"><i></i><i></i><i></i><span>R</span></div><div class="float-data data-a"><small>ECONOMIA MÉDIA</small><b>−18%</b><span>em combustível</span></div><div class="float-data data-b"><small>ALERTAS TRATADOS</small><b>2.491</b><span>nos últimos 30 dias</span></div></div>
      <div class="tech-copy reveal"><div class="eyebrow light"><span></span> A plataforma completa</div><h2>Dados que viram<br><em>resultado.</em></h2><p>Monitoramento, telemetria, relatórios e controle de jornada reunidos em uma plataforma precisa, moderna e simples de usar.</p><ul><li><b>01</b><span><strong>Monitoramento em tempo real</strong>Posições, mapas e alertas no momento em que acontecem.</span></li><li><b>02</b><span><strong>Controle de jornada</strong>Mais segurança e praticidade na gestão dos motoristas.</span></li><li><b>03</b><span><strong>Relatórios inteligentes</strong>Históricos que ajudam a prevenir manutenções e desperdícios.</span></li></ul></div>
    </section>

    <section class="hardware section">
      <div class="hardware-head reveal"><div class="eyebrow"><span></span> Soluções de tecnologia e hardware</div><h2>Projetos feitos para<br><em>a sua realidade.</em></h2><p>Equipamentos personalizados, desenvolvimento dedicado e parceria técnica para operações simples ou sistemas complexos.</p></div>
      <div class="hardware-list">
        <article class="reveal"><b>01</b><span><strong>Sensores e telemetria</strong>Leitura de dados de veículos, máquinas e equipamentos.</span></article>
        <article class="reveal"><b>02</b><span><strong>Temperatura monitorada</strong>Controle de medicamentos, cargas sensíveis e baús frigoríficos.</span></article>
        <article class="reveal"><b>03</b><span><strong>Projetos personalizados</strong>Monitoramento de máquinas, embarcações e sistemas complexos.</span></article>
        <article class="reveal"><b>04</b><span><strong>Treinamento completo</strong>Capacitação comercial, administrativa e operacional sempre que necessário.</span></article>
      </div>
      <a class="btn btn-yellow reveal" href="https://wa.me/5515997899346?text=Ol%C3%A1%20tenho%20interesse%20em%20adquirir%20o%20produto%20da%20rastreall..." target="_blank" rel="noopener">Falar com especialista <span>→</span></a>
    </section>

    <section class="how section">
      <div class="how-head reveal"><div class="eyebrow light"><span></span> Simples para você, completo por trás</div><h2>Como a Rastreall<br><em>entra em operação.</em></h2></div>
      <div class="how-steps">
        <article class="reveal"><b>01</b><div><span>Diagnóstico</span><h3>Entendemos sua rotina</h3><p>Mapeamos veículos, riscos, processos e objetivos para indicar a solução certa.</p></div></article>
        <article class="reveal"><b>02</b><div><span>Implantação</span><h3>Configuramos tudo</h3><p>Instalação técnica, parametrização de alertas e plataforma pronta para sua equipe.</p></div></article>
        <article class="reveal"><b>03</b><div><span>Evolução</span><h3>Acompanhamos resultados</h3><p>Treinamento, suporte e melhoria contínua para transformar dados em economia.</p></div></article>
      </div>
      <div class="how-features reveal"><span>Rastreamento em tempo real</span><span>Cercas e rotas eletrônicas</span><span>Alertas inteligentes</span><span>Histórico operacional</span><span>Suporte especializado</span></div>
    </section>

    <section class="app-section section" id="app">
      <div class="app-copy reveal"><div class="eyebrow"><span></span> Controle na palma da mão</div><h2>Sua frota inteira<br><em>com você.</em></h2><p>Visualize veículos no mapa em tempo real, consulte o Street View e saiba quem está dirigindo em cada momento.</p><div class="feature-pills"><span>Google Street View</span><span>Integração Waze e Maps</span><span>Criação automática de rotas</span><span>Controle de jornada</span><span>Alertas de ignição</span><span>Aplicativo com sua marca</span></div><a class="btn btn-dark" href="https://wa.me/5515997899346?text=Ol%C3%A1%20tenho%20interesse%20em%20adquirir%20o%20produto%20da%20rastreall..." target="_blank" rel="noopener">Conhecer o aplicativo <span>→</span></a></div>
      <div class="app-visual reveal"><div class="yellow-disc"></div><div class="app-phone"><div class="app-screen"><header><b>Olá, Ricardo</b><span>◉</span><small>4 veículos em movimento</small></header><div class="mobile-map"><i></i><i></i><i></i><span class="mroute"></span></div><div class="vehicle-sheet"><small>SEUS VEÍCULOS</small><div><span class="truck-icon">▰</span><p><b>Volvo FH 540</b><small>Em movimento · 64 km/h</small></p><i></i></div><div><span class="truck-icon">▰</span><p><b>Scania R450</b><small>Estacionado · há 12 min</small></p><i class="park"></i></div></div></div></div></div>
    </section>

    <section class="navigation-showcase section">
      <div class="navigation-head reveal"><div><div class="eyebrow light"><span></span> Navegação inteligente</div><h2>Rotas mais claras.<br><em>Decisões mais rápidas.</em></h2></div><p>Visualização 3D, orientação de percurso e indicadores essenciais reunidos em uma experiência pensada para quem está em movimento.</p></div>
      <figure class="navigation-screen reveal"><img src="/images/navegacao-3d.jpg" alt="Interface Rastreall de navegação tridimensional com rota destacada" loading="lazy" width="1600" height="900"><figcaption><span>Rota em tempo real</span><span>Próxima saída</span><span>Limite de velocidade</span><span>ETA e distância</span></figcaption></figure>
    </section>

    <section class="benefits section">
      <div class="section-head reveal"><div><div class="eyebrow"><span></span> Impacto mensurável</div><h2>Menos incerteza.<br><em>Mais performance.</em></h2></div></div>
      <div class="benefit-grid"><article class="reveal"><span>01</span><h3>Reduza custos<br>operacionais</h3><p>Identifique desperdícios de combustível, ociosidade e rotas ineficientes antes que pesem no caixa.</p></article><article class="reveal"><span>02</span><h3>Proteja pessoas<br>e patrimônio</h3><p>Monitore comportamentos de risco e responda rapidamente a situações fora do padrão.</p></article><article class="reveal"><span>03</span><h3>Ganhe tempo<br>para crescer</h3><p>Automatize controles e concentre sua equipe nas decisões que fazem o negócio avançar.</p></article></div>
    </section>

    <section class="faq section">
      <div class="faq-head reveal"><div class="eyebrow"><span></span> Dúvidas frequentes</div><h2>Antes de começar,<br><em>vale saber.</em></h2></div>
      <div class="faq-list reveal">
        <details><summary>A solução funciona para frotas pequenas?</summary><p>Sim. A estrutura é modular e atende desde poucos veículos até operações com diferentes tipos de ativos e regras de negócio.</p></details>
        <details><summary>Consigo acompanhar pelo celular?</summary><p>Sim. Você consulta posições, rotas, eventos, condutores e alertas pelo aplicativo, onde estiver.</p></details>
        <details><summary>A Rastreall desenvolve projetos personalizados?</summary><p>Sim. Integramos sensores, controle de temperatura, máquinas e equipamentos conforme a necessidade da operação.</p></details>
        <details><summary>Minha equipe recebe treinamento?</summary><p>Sim. O treinamento comercial, administrativo e operacional faz parte da implantação e pode ser reforçado quando necessário.</p></details>
      </div>
    </section>

    <section class="contact section" id="contato">
      <div class="contact-copy reveal"><div class="eyebrow light"><span></span> Consultoria gratuita</div><h2>Pronto para melhorar<br><em>a gestão do seu negócio?</em></h2><p>Conte um pouco sobre sua operação. Nossos consultores apresentarão uma solução adequada às necessidades da sua empresa.</p><div class="contact-items"><span><small>ATENDIMENTO</small>Segunda a sexta, das 8h às 18h</span><span><small>RESPOSTA</small>Em até 1 dia útil</span></div></div>
      <form method="post" action="/contato" class="lead-form reveal" novalidate>
        <?= csrf_field() ?><input type="text" name="website" class="form-trap" tabindex="-1" autocomplete="off" aria-hidden="true">
        <?php if ($formStatus): ?><div class="form-message <?= e($formStatus) ?>" role="status"><?= e($formMessage) ?></div><?php endif; ?>
        <label>Como podemos chamar você?<input type="text" name="name" placeholder="Seu nome" maxlength="100" autocomplete="name" required value="<?= e($old['name'] ?? '') ?>"></label>
        <div class="form-row"><label>Telefone / WhatsApp<input type="tel" name="phone" placeholder="(00) 00000-0000" maxlength="25" autocomplete="tel" required value="<?= e($old['phone'] ?? '') ?>"></label><label>Empresa<input type="text" name="company" placeholder="Nome da empresa" maxlength="120" autocomplete="organization" value="<?= e($old['company'] ?? '') ?>"></label></div>
        <label>Quantos veículos você gerencia?<select name="vehicles"><option value="">Selecione uma opção</option><?php foreach (['1 a 10 veículos', '11 a 50 veículos', '51 a 200 veículos', 'Mais de 200 veículos'] as $range): ?><option<?= ($old['vehicles'] ?? '') === $range ? ' selected' : '' ?>><?= e($range) ?></option><?php endforeach; ?></select></label>
        <button class="btn btn-yellow" type="submit">Enviar solicitação <span>→</span></button><small class="privacy">Ao enviar, você concorda com nossa Política de Privacidade.</small>
      </form>
    </section>
  </main>

  <footer><div class="footer-top"><div class="logo light-logo"><img src="/images/logo.png" alt="Rastreall" width="172" height="64"></div><p>Inteligência que acompanha<br>cada movimento.</p><a class="back-top" href="#inicio">VOLTAR AO TOPO ↑</a></div><div class="footer-grid"><div><small>NAVEGAÇÃO</small><a href="#solucoes">Soluções</a><a href="#tecnologia">Tecnologia</a><a href="#app">Aplicativo</a><a href="#sobre">Sobre nós</a></div><div><small>FALE CONOSCO</small><a href="tel:+5515997899346">+55 15 99789-9346</a><a href="https://wa.me/5515997899346?text=Ol%C3%A1%20tenho%20interesse%20em%20adquirir%20o%20produto%20da%20rastreall..." target="_blank" rel="noopener">Conversar pelo WhatsApp ↗</a><a href="mailto:contato@rastreall.com.br">contato@rastreall.com.br</a><span>Brasil</span></div><div><small>SIGA A RASTREALL</small><a href="https://www.instagram.com/rastreall_/" target="_blank" rel="noopener">Instagram ↗</a></div></div><div class="footer-bottom"><span>© <?= date('Y') ?> Rastreall. Todos os direitos reservados.</span><span>Privacidade &nbsp; Termos de uso</span></div></footer>
  <a class="whatsapp" href="https://wa.me/5515997899346?text=Ol%C3%A1%20tenho%20interesse%20em%20adquirir%20o%20produto%20da%20rastreall..." target="_blank" rel="noopener" aria-label="Solicitar produto da Rastreall pelo WhatsApp">◔<span>Fale com a gente</span></a>
  <script src="/assets/app.js" defer></script>
</body>
</html>
