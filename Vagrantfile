# vi: ruby
Vagrant.configure("2") do |config|
  config.vm.box = "hashicorp/precise32"
  config.vm.network :forwarded_port, host: 1234, guest: 80
  
	config.vm.provider "virtualbox" do |v| 
	  v.customize ["modifyvm", :id, "--natdnshostresolver1", "on"]
	end

	config.vm.provision "puppet"
  config.vm.provision :shell, :path => "bootstrap.sh"
# TODO: for security reason find a better solution. 
 config.vm.synced_folder ".", "/vagrant", :mount_options => ["dmode=777","fmode=777"]
end
