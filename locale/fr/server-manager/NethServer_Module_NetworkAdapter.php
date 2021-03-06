<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'Affectation d\'IP';
$L['bootproto_none_label'] = 'Statique';
$L['blue_label'] = 'Invités (bleu)';
$L['device_label'] = 'Périphérique';
$L['gateway_label'] = 'Passerelle';
$L['green_label'] = 'LAN (vert)';
$L['hwaddr_label'] = 'MAC address';
$L['ipaddr_label'] = 'Adresse IP';
$L['orange_label'] = 'DMZ (orange)';
$L['Key_label'] = 'Périphérique';
$L['netmask_label'] = 'Masque de réseau';
$L['NetworkAdapter_Description'] = 'Changer les paramètres réseau';
$L['NetworkAdapter_Tags'] = 'réseau carte ethernet réseaux';
$L['NetworkAdapter_Title'] = 'Réseau';
$L['red_label'] = 'Internet (rouge)';
$L['role_label'] = 'Rôle';
$L['update_header_label'] = 'Mettre à jour le périphérique';
$L['interface-config_label'] = 'Configuration de l\'interface';
$L['valid_platform,interface-config,interface-role,3'] = "Le DHCP ne peut être utiliser qu'avec des interfaces rouges";
$L['valid_platform,interface-config,interface-role,4'] = "Impossible de supprimer la dernière interface \"verte\"";
$L['No'] = 'Non';
$L['Yes'] = 'Oui';
$L['type_alias_label'] = 'Alias';
$L['type_bridge_label'] = 'Pont (Bridge)';
$L['type_bond_label'] = 'Bond';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'Configurer l\'attribution de l\'IP - ${0}';
$L['CreateLogicalInterface_label'] = 'Nouvelle interface';
$L['CreateLogicalInterface_header'] = 'Nouvelle interface logique';
$L['vlanTag_label'] = 'Tag';
$L['vlan_label'] = 'Interface';
$L['InterfaceType_label'] = 'Type';
$L['Next_label'] = 'Suivant';
$L['Back_label'] = 'Revenir en arrière';
$L['Edit_label'] = 'Editer';
$L['Edit_header'] = 'Editer ${dev} - ${bus} ${model}';
$L['Edit_description'] = "État de la liaison  \${link}\nVitess \${speed} Mbit/s\nPilote \${driver}\nAdresse MAC \${mac}";
$L['Link_status_up'] = 'Actif';
$L['Link_status_down'] = 'Inactif';
$L['Link_status_na'] = 'N/A';
$L['speed_label'] = 'Vitesse ${0}';
$L['Confirm_header'] = 'Créer ${role} interface ${device}';
$L['Action_create_bridge'] = 'Créer une nouvelle Interface bridge ${device} avec ${parts}';
$L['Action_create_bond'] = 'Create a new ${bondMode} bond interface ${device} with ${parts}';
$L['Action_create_vlan'] = 'Créer une nouvelle Interface VLAN ${device} sur ${parts}';
$L['Action_create_role'] = 'Attribuer rôle à "${role}"';
$L['Action_set_static_ip'] = 'Attribuer adresse IP ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'Obtenir configuration IP par le serveur DHCP';
$L['Action_use_gateway'] = 'Utiliser la passerelle ${gateway}';
$L['Action_use_no_gateway'] = 'Ne pas paramétrer la passerelle';
$L['Create_label'] = 'Créer interface';
$L['bridged_label'] = 'Bridgé';
$L['slave_label'] = 'Esclave';
$L['CreateIpAlias_header'] = 'Créer alias IP "${0}"';
$L['ReleasePhysicalInterface_header'] = 'Release ${0}';
$L['ReleasePhysicalInterface_roled_message'] = 'Rôle  ${role} assigné à l\'interface physique ${device}?';
$L['ReleasePhysicalInterface_slave_message'] = 'Retirer ${device} provenant du bond ${parent}?';
$L['ReleasePhysicalInterface_bridged_message'] = 'Retirer ${device} provenant du bridge ${parent}?';
$L['DeleteLogicalInterface_label'] = 'Supprimer';
$L['DeleteLogicalInterface_header'] = 'Confirmer suppression de ${0}';
$L['DeleteLogicalInterface_bond_message'] = "Effacer l'interface bond \${device}.\nPrendre un successeur provenant de ses interfaces esclaves pour lui donner ses roles actuels et ses parametres IP.";
$L['DeleteLogicalInterface_bridge_message'] = "Effacer l'interface bridge \${device}.\nPrendre un successeur provenant de ses interfaces bridgés pour lui donner ses roles actuels et ses parametres IP.";
$L['DeleteLogicalInterface_vlan_message'] = "Confirmer suppression du VLAN \${device}.";
$L['DeleteLogicalInterface_alias_message'] = "Confirmer la suppression de l'alias \${device}.";
$L['ReleasePhysicalInterface_label'] = 'Libérer rôle';
$L['Release_label'] = 'Libérer rôle';
$L['CleanPhysicalInterface_label'] = 'Supprimer';
$L['CreateIpAlias_label'] = 'Créer alias IP';
$L['successor_label'] = 'Successeur';
$L['NoSuccessor_label'] = 'Aucun';
$L['bond_label'] = 'Bond';
$L['bridge_label'] = 'Pont (Bridge)';
$L['alias_label'] = 'Alias';
$L['hotspot_label'] = 'Hotspot';
$L['RenameInterface_header'] = 'Assigner rôle à l\'interface physique';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Interface physique';
$L['CleanPhysicalInterface_header'] = 'Supprimer ${0}';
$L['Confirm device ${0} removal'] = 'Supprimer ${0} périphérique de la base de données?';
$L['Clean_label'] = 'Supprimer';
$L['Refresh_label'] = 'Rafraîchir le statut du lien';
$L['roleis_label'] = 'rôle';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Modèle ${0}';
$L['All roles are correctly assigned to network cards.'] = 'Les rôles ont tous été attribués aux cartes réseaux';
$L['type_xdsl_label'] = 'PPPoE on ppp0';
$L['xdsl_label'] = 'PPPoE';
$L['PppoeUser_label'] = 'Nom d\'utilisateur';
$L['PppoePassword_label'] = 'Mot de passe';
$L['PppoeInterface_label'] = 'Interface réseau';
$L['PppoeProvider_label'] = 'Provider';
$L['pppoe_label'] = 'PPPoE (rouge)';
$L['SetPppoeParameters_label'] = 'Configurer PPPoE';
$L['SetPppoeParameters_header'] = 'Configure PPPoE device ppp0';
$L['ReleasePhysicalInterface_pppoe_message'] = "Release PPPoE red role from \${device}?\nThe associated ppp0 device will be also removed.";
$L['DeleteLogicalInterface_xdsl_message'] = "Remove the logical PPPoE device ppp0?";
$L['valid_pppoe_already_configured'] = 'The PPPoE device ppp0 is already configured';
$L['valid_pppoe_red_role_only'] = 'The PPPoE device ppp0 must be assigned the red role';
$L['PppoeAuthType_label'] = 'Type d\'authentification';
$L['AuthType_auto'] = 'Automatique';
$L['AuthType_pap'] = 'PAP';
$L['AuthType_chap'] = 'CHAP';
$L['bondMode_label'] = 'Mode';
$L['BondMode_0_label'] = 'balance round robin';
$L['BondMode_1_label'] = 'active backup';
$L['BondMode_2_label'] = 'balance XOR';
$L['BondMode_3_label'] = 'broadcast';
$L['BondMode_4_label'] = '802.3ad';
$L['BondMode_5_label'] = 'balance TLB';
$L['BondMode_6_label'] = 'balance ALB';