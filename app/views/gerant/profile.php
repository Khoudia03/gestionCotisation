<?php

require_once(dirname(__DIR__)."/layouts/header.php");

?>



<div class="w-[300px] bg-ink rounded-[34px] p-2.5 shadow-[0_24px_48px_-18px_rgba(22,38,31,0.45)]">
  <div class="bg-papercard rounded-[26px] overflow-hidden min-h-[560px] flex flex-col relative">
    <div class="w-[90px] h-[22px] bg-ink rounded-b-[14px] mx-auto relative z-[2]"></div>
    <div class="px-5 pt-[18px] pb-[14px]">
      <div class="font-display font-semibold text-xl mb-[3px]">Mon profil</div>
      <div class="text-[11.5px] text-inksoft font-mono">Informations du compte</div>
    </div>
    <div class="border-t-2 border-dashed border-linestrong relative mt-0.5">
      <span class="absolute -top-1.5 -left-4 w-3 h-3 rounded-full bg-ink"></span>
      <span class="absolute -top-1.5 -right-4 w-3 h-3 rounded-full bg-ink"></span>
    </div>
    <div class="px-5 pt-[18px] pb-[26px] flex flex-col gap-4 flex-1">
      <div class="bg-white border border-line rounded-2xl p-4 flex flex-col gap-3 items-center text-center">
        <div class="w-16 h-16 rounded-full bg-goldsoft"></div>
        <div class="font-display font-semibold text-[17px]">Mamadou Seck Dieye</div>
        <span class="inline-flex items-center gap-[5px] pl-1.5 pr-2.5 py-[3px] rounded-full border-[1.5px] border-dashed border-current font-mono text-[10px] font-semibold tracking-[.05em] uppercase text-forest bg-forestsoft">
          <span class="w-3.5 h-3.5 rounded-full border-[1.5px] border-current flex items-center justify-center text-[8px]">✓</span>Gérant
        </span>
      </div>
      <div class="bg-white border border-line rounded-2xl p-4 flex flex-col gap-3">
        <div class="text-[13px] font-semibold">Informations</div>
        <div>
          <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Nom complet</label>
          <div class="border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] text-inksoft bg-white">Mamadou Seck Dieye</div>
        </div>
        <div>
          <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Email</label>
          <div class="border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] text-inksoft bg-white">mamadou.dieye@exemple.com</div>
        </div>
        <div>
          <label class="text-[11px] font-semibold text-inksoft uppercase tracking-[.04em] block mb-1.5">Rôle</label>
          <div class="border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] text-inksoft bg-white">Gérant — Cohorte Dev Web 2026</div>
        </div>
      </div>
      <div class="flex items-center justify-center gap-1.5 px-4 py-3 rounded-[11px] font-semibold text-[13.5px] w-full bg-bricksoft text-brick"><a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=auth&action=connexion">Se déconnecter</a></div>
    </div>
    <div class="mt-auto flex justify-around px-2.5 pt-3 pb-4 border-t border-line bg-white">
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=dashboard" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Dashboard</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=paiement" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Paiements</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=apprenant" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Apprenants</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=profile" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-ink"></div><span class="text-[9px] text-ink font-bold">Profil</span></a>
    </div>
  </div>
</div>
</body>
</html>