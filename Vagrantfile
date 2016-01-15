# -*- mode: ruby -*-
# vi: set ft=ruby :

# Configuration Settings #######################################################
  VAGRANTFILE_API_VERSION = "2"
  VAGRANTFILE_VM_BOX = "scotch/box"
  VAGRANTFILE_VM_IP = "192.168.33.10"
  VAGRANTFILE_VM_HOSTNAME = "scotchbox"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
    config.vm.box = VAGRANTFILE_VM_BOX
    config.vm.network "private_network", ip: VAGRANTFILE_VM_IP
    config.vm.hostname = VAGRANTFILE_VM_HOSTNAME
    config.vm.synced_folder ".", "/var/www", :mount_options => ["dmode=777", "fmode=666"]
end
