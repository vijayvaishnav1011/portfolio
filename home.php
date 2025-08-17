<?php
$page_title = 'Home — Vijay Vaishnav';
include 'header.php';

/* ---- Simple demo data (easy to edit) ---- */
$works = array_map(fn($i)=>[
  'title'=>"Project $i",
  'tag'=>['Fraud','Forecast','NLP','Vision','MLOps','GenAI'][$i-1],
  'desc'=>"Short one-liner about the solution & impact."
], range(1,6));

$services = [
  ['team'=>'4 Developers','title'=>'AI for IT Operations','desc'=>'Monitoring, analytics, auto-remediation.'],
  ['team'=>'5 Developers','title'=>'Generative AI Development','desc'=>'Text/image apps, workflows, prototyping.'],
  ['team'=>'2 Developers','title'=>'Data Engineering','desc'=>'Pipelines, feature stores, quality checks.'],
  ['team'=>'3 Developers','title'=>'Model Monitoring','desc'=>'Drift, alerting, evaluations, dashboards.'],
];

$timeline = [
  ['role'=>'ML Engineer — Zoibit','when'=>'2023 — Present','text'=>'Built fraud models; designed MLOps pipelines.'],
  ['role'=>'Data Analyst — ABC','when'=>'2021 — 2023','text'=>'Dashboards, SQL, forecasting.'],
  ['role'=>'Intern — DS Lab','when'=>'2020','text'=>'Text classification POC.'],
];

$blog = [
  ['t'=>'Productionizing an XGBoost model','s'=>'From notebook to CI/CD in 7 steps'],
  ['t'=>'Detecting drift in tabular data','s'=>'KS tests, PSI, and practical thresholds'],
  ['t'=>'Serving GenAI safely','s'=>'Rate limits, red-teaming, guardrails']
];

$skills = ['Python','Pandas','NumPy','Scikit-learn','TensorFlow','PyTorch','SQL/MySQL','Airflow','Docker','MLflow','Git','Linux'];
?>

<!-- HERO -->
<section class="section-block" id="home">
  <div class="display-5 fw-bold lh-sm mb-2">
    Artificial Intelligence &amp; Machine Learning <span class="highlight-pill">Engineer</span>
  </div>
  <p class="text-secondary mb-0">
    Deep purple + golden layout. Use the top menu to jump. This pane scrolls internally (scrollbar hidden).
  </p>
</section>

<!-- ABOUT -->
<section id="about" class="section-block">
  <h3 class="section-title mb-3">About</h3>
  <div class="row g-4">
    <div class="col-md-6">
      <div class="demo-card p-3 h-100">
        <h5 class="mb-2">Who am I?</h5>
        <p class="text-secondary mb-0">
          ML engineer focusing on fraud detection, anomaly detection, and MLOps. I love
          reliable data pipelines and monitoring dashboards.
        </p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="demo-card p-3 h-100">
        <h5 class="mb-2">Toolbox</h5>
        <p class="text-secondary mb-2">Python, SQL, Docker, MLflow, Airflow, Grafana.</p>
        <div class="d-flex flex-wrap gap-2">
          <?php foreach($skills as $s): ?>
            <span class="badge bg-secondary-subtle text-light border"><?=htmlspecialchars($s)?></span>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WORKS -->
<section id="works" class="section-block">
  <h3 class="section-title mb-3">Works</h3>
  <div class="row g-3">
    <?php foreach($works as $w): ?>
      <div class="col-6 col-md-4">
        <div class="demo-card p-3 h-100">
          <div class="small text-secondary">Case Study — <?=htmlspecialchars($w['tag'])?></div>
          <div class="fw-semibold"><?=htmlspecialchars($w['title'])?></div>
          <div class="text-secondary small"><?=htmlspecialchars($w['desc'])?></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- SERVICES -->
<section id="services" class="section-block">
  <h3 class="section-title mb-3">Services</h3>
  <div class="row g-4">
    <?php foreach($services as $srv): ?>
      <div class="col-md-6">
        <div class="card card-dark p-4 h-100 rounded-4 service-card">
          <div class="text-secondary small mb-1"><?=htmlspecialchars($srv['team'])?></div>
          <h4 class="mb-2"><?=htmlspecialchars($srv['title'])?></h4>
          <p class="text-secondary mb-0"><?=htmlspecialchars($srv['desc'])?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- RESUME -->
<section id="resume" class="section-block">
  <h3 class="section-title mb-3">Resume</h3>
  <div class="row g-3">
    <?php foreach($timeline as $t): ?>
      <div class="col-md-6">
        <div class="demo-card p-3 h-100">
          <div class="fw-semibold"><?=htmlspecialchars($t['role'])?></div>
          <div class="small text-secondary"><?=htmlspecialchars($t['when'])?></div>
          <p class="text-secondary mb-0"><?=htmlspecialchars($t['text'])?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- SKILLS -->
<section id="skills" class="section-block">
  <h3 class="section-title mb-3">Skills</h3>
  <div class="d-flex flex-wrap gap-2">
    <?php foreach($skills as $s): ?>
      <span class="badge bg-secondary-subtle text-light border"><?=htmlspecialchars($s)?></span>
    <?php endforeach; ?>
  </div>
</section>

<!-- BLOG -->
<section id="blog" class="section-block">
  <h3 class="section-title mb-3">Blog</h3>
  <div class="row g-3">
    <?php foreach($blog as $b): ?>
      <div class="col-md-4">
        <div class="demo-card p-3 h-100">
          <div class="fw-semibold"><?=htmlspecialchars($b['t'])?></div>
          <div class="small text-secondary"><?=htmlspecialchars($b['s'])?></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- CONTACT -->
<section id="contact" class="section-block">
  <h3 class="section-title mb-3">Contact</h3>
  <form class="row g-3">
    <div class="col-md-6"><input type="text" class="form-control bg-dark text-light border-0" placeholder="Your name"></div>
    <div class="col-md-6"><input type="email" class="form-control bg-dark text-light border-0" placeholder="Email"></div>
    <div class="col-12"><textarea rows="3" class="form-control bg-dark text-light border-0" placeholder="Message"></textarea></div>
    <div class="col-12"><button class="btn btn-success-soft px-4 py-2 rounded-pill" type="submit">Send</button></div>
  </form>
</section>

<?php include 'footer.php'; ?>
