<?php

require_once(dirname(__DIR__)."/layouts/header.php");

?>


<div class="w-[300px] bg-ink rounded-[34px] p-2.5 shadow-[0_24px_48px_-18px_rgba(22,38,31,0.45)]">
  <div class="bg-papercard rounded-[26px] overflow-hidden min-h-[560px] flex flex-col relative">
    <div class="w-[90px] h-[22px] bg-ink rounded-b-[14px] mx-auto relative z-[2]"></div>
    <div class="px-5 pt-[18px] pb-[14px]">
      <div class="flex justify-between items-center">
        <div class="font-display font-semibold text-xl">Apprenants</div>
        <div class="flex items-center justify-center gap-1.5 px-3.5 py-2 rounded-[11px] font-semibold text-xs bg-gold text-white">+ Ajouter</div>
      </div>
    </div>
    <div class="border-t-2 border-dashed border-linestrong relative mt-0.5">
      <span class="absolute -top-1.5 -left-4 w-3 h-3 rounded-full bg-ink"></span>
      <span class="absolute -top-1.5 -right-4 w-3 h-3 rounded-full bg-ink"></span>
    </div>
    <div class="px-5 pt-[18px] pb-[26px] flex flex-col gap-4 flex-1">
      <div class="border-[1.5px] border-linestrong rounded-[10px] px-3 py-[11px] text-[13px] text-inksoft bg-white">Rechercher un apprenant…</div>
      <div class="flex gap-2 px-3 py-2.5 rounded-[10px] text-[11px] leading-[1.5] bg-goldsoft text-[#7A5B26] justify-center text-center"><b class="font-bold">Importer un fichier</b>&nbsp;Excel / CSV</div>
      <div class="flex flex-col gap-2.5">
        <div class="flex items-center gap-3 p-3 bg-white border border-line rounded-[13px]">
          <div class="w-[34px] h-[34px] rounded-full bg-goldsoft flex-shrink-0"></div>
          <div class="flex flex-col gap-1 flex-1"><b class="text-[13px]">Aïssatou Diallo</b>
            <span class="w-fit inline-flex items-center gap-[5px] pl-1.5 pr-2.5 py-[3px] rounded-full border-[1.5px] border-dashed border-current font-mono text-[10px] font-semibold tracking-[.05em] uppercase text-forest bg-forestsoft"><span class="w-3.5 h-3.5 rounded-full border-[1.5px] border-current flex items-center justify-center text-[8px]">✓</span>À jour</span>
          </div>
          <span class="text-ink text-[11.5px] font-semibold">Voir</span>
        </div>
        <div class="flex items-center gap-3 p-3 bg-white border border-line rounded-[13px]">
          <div class="w-[34px] h-[34px] rounded-full bg-goldsoft flex-shrink-0"></div>
          <div class="flex flex-col gap-1 flex-1"><b class="text-[13px]">Moussa Kane</b>
            <span class="w-fit inline-flex items-center gap-[5px] pl-1.5 pr-2.5 py-[3px] rounded-full border-[1.5px] border-dashed border-current font-mono text-[10px] font-semibold tracking-[.05em] uppercase text-brick bg-bricksoft"><span class="w-3.5 h-3.5 rounded-full border-[1.5px] border-current flex items-center justify-center text-[8px]">!</span>Retard</span>
          </div>
          <span class="text-ink text-[11.5px] font-semibold">Voir</span>
        </div>
        <div class="flex items-center gap-3 p-3 bg-white border border-line rounded-[13px]">
          <div class="w-[34px] h-[34px] rounded-full bg-goldsoft flex-shrink-0"></div>
          <div class="flex flex-col gap-1 flex-1"><b class="text-[13px]">Fatou Sarr</b>
            <span class="w-fit inline-flex items-center gap-[5px] pl-1.5 pr-2.5 py-[3px] rounded-full border-[1.5px] border-dashed border-current font-mono text-[10px] font-semibold tracking-[.05em] uppercase text-forest bg-forestsoft"><span class="w-3.5 h-3.5 rounded-full border-[1.5px] border-current flex items-center justify-center text-[8px]">✓</span>À jour</span>
          </div>
          <span class="text-ink text-[11.5px] font-semibold">Voir</span>
        </div>
        <div class="flex items-center gap-3 p-3 bg-white border border-line rounded-[13px]">
          <div class="w-[34px] h-[34px] rounded-full bg-goldsoft flex-shrink-0"></div>
          <div class="flex flex-col gap-1 flex-1"><b class="text-[13px]">Ibrahima Touré</b>
            <span class="w-fit inline-flex items-center gap-[5px] pl-1.5 pr-2.5 py-[3px] rounded-full border-[1.5px] border-dashed border-current font-mono text-[10px] font-semibold tracking-[.05em] uppercase text-brick bg-bricksoft"><span class="w-3.5 h-3.5 rounded-full border-[1.5px] border-current flex items-center justify-center text-[8px]">!</span>Retard</span>
          </div>
          <span class="text-ink text-[11.5px] font-semibold">Voir</span>
        </div>
      </div>
    </div>
    <div class="mt-auto flex justify-around px-2.5 pt-3 pb-4 border-t border-line bg-white">
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=dashboard" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Dashboard</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=paiement" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Paiements</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=apprenant" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-ink"></div><span class="text-[9px] text-ink font-bold">Apprenants</span></a>
      <a href="http://mami.cisse.odc.edu.sn:80/index.php?controller=gerant&action=profile" class="flex flex-col items-center gap-1"><div class="w-4 h-4 rounded-[5px] bg-line"></div><span class="text-[9px] text-inksoft font-medium">Profil</span></a>
    </div>
  </div>
</div>