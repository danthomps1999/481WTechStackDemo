package main;

import com.google.auth.oauth2.GooCgleCredentials;
import com.google.cloud.firestore.Firestore;

import com.google.firebase.FirebaseApp;
import com.google.firebase.FirebaseOptions;

public class TestMain {

	public static void main(String[] args) {
		System.out.println("Hello");

		// Use the application default credentials
		GoogleCredentials credentials = GoogleCredentials.getApplicationDefault();
		FirebaseOptions options = new FirebaseOptions.Builder().setCredentials(credentials).setProjectId(projectId)
				.build();
		FirebaseApp.initializeApp(options);

		Firestore db = FirestoreClient.getFirestore();
		
	}

}
