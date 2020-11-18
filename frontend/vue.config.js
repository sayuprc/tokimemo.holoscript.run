module.exports = {
	outputDir: '../public',
	indexPath: process.env.NODE_ENV === 'production' ? '../resources/views/index.blade.php' : 'index.html',
	pages: {
		index: {
			entry: 'src/main.js',
			title: 'ときのそらメモリアル',
		}
	},
}
