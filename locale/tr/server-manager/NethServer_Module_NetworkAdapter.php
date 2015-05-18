<?php 

/* NethServer_Module_NetworkAdapter translation, language: en */

$L['bootproto_dhcp_label'] = 'DHCP';
$L['bootproto_label'] = 'IP atama';
$L['bootproto_none_label'] = 'Durağan';
$L['blue_label'] = 'Konuklar (mavi)';
$L['device_label'] = 'Aygıt';
$L['gateway_label'] = 'Ağ geçidi';
$L['green_label'] = 'Yerel ağ (yeşil)';
$L['hwaddr_label'] = 'MAC adresi';
$L['ipaddr_label'] = 'IP adresi';
$L['orange_label'] = 'DMX (turuncu)';
$L['Key_label'] = 'Aygıt';
$L['netmask_label'] = 'Ağ maskesi';
$L['NetworkAdapter_Description'] = 'Ağ ayarlarını değiştir';
$L['NetworkAdapter_Tags'] = 'ağ bağdaştırıcı ethernet ağları';
$L['NetworkAdapter_Title'] = 'Ağ';
$L['red_label'] = 'Internet (kırmızı)';
$L['role_label'] = 'Ro';
$L['update_header_label'] = 'Aygıtı güncelle';
$L['interface-config_label'] = 'Arabirim ayarları';
$L['valid_platform,interface-config,interface-role,3'] = "DHCP yalnız kırmızı arabirimlerde kullanılabilir";
$L['valid_platform,interface-config,interface-role,4'] = "Son yeşil arabirim silinemez";
$L['No'] = 'Hayır';
$L['Yes'] = 'Evet';
$L['type_alias_label'] = 'Kısaltma';
$L['type_bridge_label'] = 'Köprü';
$L['type_bond_label'] = 'Bağlantı';
$L['type_vlan_label'] = 'VLAN';
$L['SetIpAddress_header'] = 'IP atamasını ayarla - ${0}';
$L['CreateLogicalInterface_label'] = 'Arabirim ekle';
$L['CreateLogicalInterface_header'] = 'Mantıksal arabirim ekle';
$L['vlanTag_label'] = 'Etiket';
$L['vlan_label'] = 'Arabirim';
$L['InterfaceType_label'] = 'Tip';
$L['Next_label'] = 'Sonraki';
$L['Back_label'] = 'Önceki';
$L['Edit_label'] = 'Düzenle';
$L['Edit_header'] = 'Düzenle ${dev} - ${bus} ${model}';
$L['Edit_description'] = "Bağlantı durumu: \${link}\nHız \${speed} Mbit/s\nSürücü \${driver}\nMac adresi \${mac}";
$L['Link_status_up'] = 'etkin';
$L['Link_status_down'] = 'devre dışı';
$L['Link_status_na'] = 'Bilinmiyor';
$L['speed_label'] = 'Hız ${0}';
$L['Confirm_header'] = '${role} ${device} arabirimi ekle';
$L['Action_create_bridge'] = '${device} ${parts} ile yeni köprü arabirimi ekle ';
$L['Action_create_bond'] = '${device} ${parts} ile yeni bağlantı arabirimi ekle ';
$L['Action_create_vlan'] = '${device} ${parts} ile yeni VLAN arabirimi ekle ';
$L['Action_create_role'] = 'Rolü "${role}" olarak ayarla';
$L['Action_set_static_ip'] = 'Durağan IP ayarla ${ipaddr}/${netmask}';
$L['Action_use_dhcp'] = 'DHCP sunucusundan IP ayarlarını al';
$L['Action_use_gateway'] = '${gateway} ağ geçidi kullanılsın';
$L['Action_use_no_gateway'] = 'Ağ geçidi kullanılmasın';
$L['Create_label'] = 'Arabirim ekle';
$L['bridged_label'] = 'Köprülenmiş';
$L['slave_label'] = 'Uydu';
$L['CreateIpAlias_header'] = 'IP kısaltması ekle "${0}"';
$L['ReleasePhysicalInterface_header'] = '${0} bırak';
$L['ReleasePhysicalInterface_roled_message'] = '${device} arabirimine atanmış ${role} rolü kaldırılsın mı?';
$L['ReleasePhysicalInterface_slave_message'] = '${device} aygıtı ${parent} bağlantısından kaldırılsın mı?';
$L['ReleasePhysicalInterface_bridged_message'] = '${device} aygıtı ${parent} köprüsünden kaldırılsın mı?';
$L['DeleteLogicalInterface_label'] = 'Sil';
$L['DeleteLogicalInterface_header'] = '${0} silinsin mi?';
$L['DeleteLogicalInterface_bond_message'] = "\${device} bağlantı aygıtı siliniyor.\nGeçerli rol ve IP ayarlarının devredileceği bir uydu arabirimi seçin.";
$L['DeleteLogicalInterface_bridge_message'] = "\${device} köprü aygıtı siliniyor.\nGeçerli rol ve IP ayarlarının devredileceği bir köprülenmiş arabirim seçin.";
$L['DeleteLogicalInterface_vlan_message'] = "\${device} VLAN aygıtı silinsin mi?";
$L['DeleteLogicalInterface_alias_message'] = "\${device} kısaltma aygıtı silinsin mi?";
$L['ReleasePhysicalInterface_label'] = 'Rolü bırak';
$L['Release_label'] = 'Rolü bırak';
$L['CleanPhysicalInterface_label'] = 'Sil';
$L['CreateIpAlias_label'] = 'IP kısaltması ekle';
$L['successor_label'] = 'Devredilecek';
$L['NoSuccessor_label'] = 'Yok';
$L['bond_label'] = 'Bağlantı';
$L['bridge_label'] = 'Köprü';
$L['alias_label'] = 'Kısaltma';
$L['hotspot_label'] = 'Sıcak nokta';
$L['RenameInterface_header'] = 'Fiziksel arabirimlere rol ata';
$L['[leave untouched]'] = '-';
$L['cards_label'] = 'Fiziksel arabirimler';
$L['CleanPhysicalInterface_header'] = '${0} silinsin';
$L['Confirm device ${0} removal'] = '${0} aygıtı veritabanından silinsin mi?';
$L['Clean_label'] = 'Sil';
$L['Refresh_label'] = 'Bağlantı durumunu yenile';
$L['roleis_label'] = 'rol';
$L['MAC: ${0}'] = 'MAC ${0}';
$L['Model: ${0}'] = 'Model ${0}';
$L['All roles are correctly assigned to network cards.'] = 'Tüm roller ağ kartlarına düzgün olarak atandı.';