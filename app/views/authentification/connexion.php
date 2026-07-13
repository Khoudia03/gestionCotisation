<?php require_once(dirname(__DIR__)."/layouts/header.php"); ?>

<div class="max-w-[400px] mx-auto pt-24 px-6">

  <div class="bg-white border border-line rounded-2xl p-6 flex flex-col gap-4">
    <div class="text-lg font-semibold font-display">Connexion</div>
    <form method="post" action="http://mami.cisse.odc.edu.sn:80/index.php?controller=auth&action=authentifier" class="flex flex-col gap-4">
      <div>
        <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Email</label>
        <input type="email" name="email" required
               class="w-full border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px]">
      </div>
      <div>
        <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Mot de passe</label>
        <input type="password" name="password" required
               class="w-full border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px]">
      </div>
      <div>
        <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Rôle</label>
        <select name="role"
                class="w-full border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] bg-white">
          <option value="gerant">Gérant</option>
          <option value="apprenant">Apprenant</option>
          <option value="coach">Coach</option>
        </select>
      </div>
      <button type="submit"
              class="flex items-center justify-center gap-1.5 px-4 py-3 rounded-[11px] font-semibold text-[13.5px] bg-ink text-white w-full">
        Se connecter
      </button>
      <div class="text-inksoft text-[11.5px] text-center">
        Vous n'avez pas de compte ? <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=auth&action=inscrire" class="text-ink font-semibold">S'inscrire</a>
      </div>    
    </form>
  </div>

  <div class="mt-6 flex flex-col gap-2">
    <div class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] text-center">
      Accès de test (sans compte réel)
    </div>
    <div class="flex gap-2">
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=home&action=accueilApprenant"
         class="flex-1 text-center px-3 py-2.5 rounded-[10px] text-[12px] font-semibold border-[1.5px] border-forest text-forest bg-forestsoft">
        Apprenant
      </a>
      <a href="/login/gerant"
         class="flex-1 text-center px-3 py-2.5 rounded-[10px] text-[12px] font-semibold border-[1.5px] border-gold text-gold bg-goldsoft">
        Gérant
      </a>
      <a href="/login/coach"
         class="flex-1 text-center px-3 py-2.5 rounded-[10px] text-[12px] font-semibold border-[1.5px] border-brick text-brick bg-bricksoft">
        Coach
      </a>
    </div>
  </div>
</div>

</body>
</html>