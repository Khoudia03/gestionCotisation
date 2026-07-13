<?php require_once(dirname(__DIR__)."/layouts/header.php"); ?>


<div class="max-w-[440px] mx-auto pt-16 pb-16 px-6">

  <div class="flex flex-col items-center gap-2.5 mb-8">
    <div class="w-[52px] h-[52px] rounded-2xl bg-ink flex items-center justify-center">
      <div class="w-5 h-5 border-2 border-gold rounded-full"></div>
    </div>
    <div class="font-display font-semibold text-[19px]">CotisApp</div>
    <div class="text-inksoft text-[11.5px] text-center">Rejoindre la cotisation de la classe</div>
  </div>

  <div class="bg-white border border-line rounded-2xl p-6 flex flex-col gap-4">
    <div>
      <div class="text-lg font-semibold font-display">Créer un compte</div>
      <div class="text-[12px] text-inksoft mt-1">Inscription apprenant — cohorte en cours</div>
    </div>

    <form method="post" action="http://mami.cisse.odc.edu.sn/index.php?controller=auth&action=authentifier" class="flex flex-col gap-4">

      <div>
        <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Nom complet</label>
        <input type="text" name="nom" required placeholder="Aïssatou Diallo"
               class="w-full border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] placeholder:text-inksoft/60">
      </div>

      <div>
        <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Email</label>
        <input type="email" name="email" required placeholder="nom@exemple.com"
               class="w-full border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] placeholder:text-inksoft/60">
      </div>

      <div>
        <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Téléphone</label>
        <input type="tel" name="telephone" placeholder="77 123 45 67"
               class="w-full border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] placeholder:text-inksoft/60">
      </div>

      <div class="grid grid-cols-2 gap-3">
        <div>
          <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Mot de passe</label>
          <input type="password" name="password" required placeholder="••••••••"
                 class="w-full border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] placeholder:text-inksoft/60">
        </div>
        <div>
          <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Confirmer</label>
          <input type="password" name="password_confirm" required placeholder="••••••••"
                 class="w-full border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] placeholder:text-inksoft/60">
        </div>
      </div>

      <label class="flex items-start gap-2.5 text-[11.5px] text-inksoft">
        <input type="checkbox" name="cgu" required class="mt-0.5 accent-ink">
        J'accepte les règles de cotisation de la classe (hebdomadaire, anniversaires, cas sociaux).
      </label>

      <button type="submit"
              class="flex items-center justify-center gap-1.5 px-4 py-3 rounded-[11px] font-semibold text-[13.5px] bg-ink text-white w-full">
        Créer mon compte
      </button>

      <div class="text-inksoft text-[11.5px] text-center">
        Déjà inscrit ? <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=auth&action=connexion" class="text-ink font-semibold">Se connecter</a>
      </div>
    </form>
  </div>

  <div class="mt-6 flex gap-2 px-3 py-2.5 rounded-[10px] text-[11px] leading-[1.5] bg-goldsoft text-[#7A5B26]">
    <b class="font-bold">À savoir —</b> ton gérant peut aussi t'ajouter manuellement, ou importer la liste de la classe via un fichier Excel/CSV.
  </div>

</div>

</body>
</html>